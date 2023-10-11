<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Http\Resources\TicketResource;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Ticket::all();
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
    public function show(string $id)
    {
        //
        return new TicketResource(Ticket::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketRequest $request, string $id)
    {
        //
        $ticket = Ticket::findOrFail($id);
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->save();
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
