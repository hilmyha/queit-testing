<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Queue;
use App\Models\Status;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.queues.index', [
            'queues' => Queue::where('user_id', auth()->id())->latest()->get(),
        ]);
    }

    /**
     * Show all queues.
     */
    public function showAll()
    {
        return view('admin.queues.showall', [
            'queues' => Queue::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.queues.create', [
            'departements' => Departement::all(),
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'departement_id' => 'required',
            'body' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        // status default adalah 1 (pending)
        $validatedData['status_id'] = 1;

        // queue number dengan format: # + nomor urut + 1 + tanggal hari ini
        $validatedData['queue_number'] = '#' . (Queue::count() + 1) . '-' . date('dmy');

        Queue::create($validatedData);

        return redirect()->route('queues.index')->with('success', 'Queue created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Queue $queue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Queue $queue)
    {
        return view('admin.queues.edit', [
            'queue' => $queue,
            'departements' => Departement::all(),
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Queue $queue)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'departement_id' => 'required',
            'body' => 'required',
        ]);

        // status default adalah 1 (pending)
        $validatedData['status_id'] = 1;

        $queue->update($validatedData);

        return redirect()->route('queues.index')->with('success', 'Queue updated successfully');
    }

    /**
     * Review queue update.
     */
    public function review(Queue $queue)
    {
        return view('admin.queues.review', [
            'queue' => $queue,
            'departements' => Departement::all(),
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update queue status.
     */
    public function updateStatus(Request $request, Queue $queue, Departement $departement)
    {
        $validatedData = $request->validate([
            'status_id' => 'required',
        ]);

        $queue->update($validatedData);

        // return ke halaman departement dengan id yang sama
        return redirect()->back()->with('success', 'Queue status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Queue $queue)
    {
        $queue->delete();

        return redirect()->route('queues.index')->with('success', 'Queue deleted successfully');
    }
}
