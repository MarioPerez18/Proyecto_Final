<?php

namespace App\Models;
use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use HasFactory;

    public function getEventId(){
        return $this->attributes['event_id'];
    }

    public function setEventId($event_id){
        $this->attributes['event_id'] = $event_id;
    }

    public function getParticipantId(){
        return $this->attributes['participant_id'];
    }

    public function setParticipantId($participant_id){
        $this->attributes['participant_id'] = $participant_id;
    }

    

    //relacion uno a muchos (inverso)
    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function participant(){
        return $this->belongsTo(Participant::class);
    }
    
}
