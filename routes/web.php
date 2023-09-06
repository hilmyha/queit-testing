<?php

use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\QueueController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// public route
Route::group(['middleware' => ['auth', 'role:admin|staff|user']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'departements' => App\Models\Departement::all(),
            'queues' => App\Models\Queue::all(),
            'statuses' => App\Models\Status::all(),
        ]);
    })->name('dashboard');

    Route::resource('/dashboard/queues', QueueController::class)->name('dashboard.queues', 'queues');
});

// route to departement
Route::group(['middleware' => ['auth', 'role:admin|staff']], function () {
    Route::resource('/dashboard/departements', DepartementController::class)->name('dashboard.departements', 'departements');
    Route::get('/dashboard/show-all-queues', [QueueController::class, 'showAll'])->name('queues.showall');
    Route::get('/dashboard/queues/{queue}/review', [QueueController::class, 'review'])->name('queues.review');
    Route::put('/dashboard/queues/{queue}/updateStatus', [QueueController::class, 'updateStatus'])->name('queues.updateStatus');
});

// route to admin dashboard
Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'giveRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'revokeRole'])->name('permissions.roles.revoke');
    
    // Users from fortify
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Users from fortify
    Route::post('/users/{user}/roles', [UserController::class, 'giveRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'revokeRole'])->name('users.roles.revoke');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    // status
    Route::resource('/statuses', StatusController::class);
});