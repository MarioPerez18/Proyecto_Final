<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;


class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = [];
        $events['eventos'] = Event::all();
        return view('listarEventos.eventos')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroEvento.evento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Event::validate($request);
        $newEvent = new Event();
        $newEvent->setName($request->input('nombre'));
        $newEvent->setDescription($request->input('descripcion'));
        $newEvent->setStartDate($request->input('fechaInicio'));
        $newEvent->setEndingDate($request->input('fechaFin'));

        $newEvent->save(); 
        return back();  
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $events = [];
        $events['event'] = Event::findOrFail($id);
        return view('eventos.edit')->with('events', $events);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::findOrFail($id);
        $event->setName($request->input('nombre'));
        $event->setDescription($request->input('descripcion'));
        $event->setStartDate($request->input('fechaInicio'));
        $event->setEndingDate($request->input('fechaFin'));

        $event->save();
        return redirect()->route('listarEventos.eventos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::destroy($id);
        return back();
    }
}
