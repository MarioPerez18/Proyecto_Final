<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EventParticipant;




class AdminParticipantController extends Controller
{
    public function index(){
       
                            
        $participant = EventParticipant::select('event_participants.id', 'participants.nombres', 'events.nombre AS evento') 
                                         ->join('participants', 'event_participants.participant_id', '=', 'participants.id')
                                         ->join('events', 'event_participants.event_id', '=', 'events.id')
                                         ->get();
                                        
        
        return view('participants.index')->with('participants', $participant);  
           
    }
}