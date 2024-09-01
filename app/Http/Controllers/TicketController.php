<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Inertia\Inertia;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Ticket',  Ticket::get());
    }

  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Inertia::render('Ticket',  Ticket::create($request->all()));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Ticket::findOrFail($id);
        $data->update($request->all());

        return Inertia::render('Ticket',  $data);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $data = Ticket::findOrFail($id);
        $data->delete();

        return Inertia::render('Ticket',  $data);
    }

    public function cancel()
    {
        return redirect()->route('Ticket');
    }
}
