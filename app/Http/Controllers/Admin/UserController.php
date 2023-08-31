<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.role', [
            'user' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return redirect()->back()->with('error', 'You cannot delete admin user.');
        }

        User::destroy($user->id);

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    // Give role to user
    public function giveRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return redirect()->back()->with('error', 'Role already assigned.');
        }

        $user->assignRole($request->role);

        return redirect()->back()->with('success', 'Role assigned successfully.');
    }

    // Revoke role from user
    public function revokeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return redirect()->back()->with('success', 'Role revoked successfully.');
        }
    }
    // Give permission to user
    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return redirect()->back()->with('error', 'User already has this permission.');
        }

        $user->givePermissionTo($request->permission);

        return redirect()->back()->with('success', 'Permission given to user successfully.');
    }

    // Revoke permission from user
    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return redirect()->back()->with('success', 'Permission revoked from user successfully.');
        }
    }
}
