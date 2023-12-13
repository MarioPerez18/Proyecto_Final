<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participant;

class EventController extends Controller
{
    public function index(){
        $events = [];
        $events['eventos'] = Event::all();
        return view('inscripcion.index')->with('events', $events);
    }

    public function create($id){
        $event = [];
        $evento = Event::findOrFail($id);
        $event['event'] = $evento;
        return view('inscripcion.create')->with('event', $event);
    }

    public function store(Request $request){
        Participant::validate($request);
        $participant = new Participant();

        $participant->setApellidoPaterno($request->input('apellidoPaterno'));
        $participant->setApellidoMaterno($request->input('apellidoMaterno'));
        $participant->setNombres($request->input('nombres'));
        $participant->setGenero($request->input('genero'));
        $participant->setEmail($request->input('email'));
        $participant->setTelefono($request->input('telefono'));
        $participant->save();
        return back();
    }
}
