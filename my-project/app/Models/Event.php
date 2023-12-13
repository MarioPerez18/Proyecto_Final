<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventParticipant;
use Illuminate\Events\Dispatcher;

class Event extends Model
{
    use HasFactory;

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getName(){
        return $this->attributes['nombre'];
    }

    public function setName($nombre){
        $this->attributes['nombre'] = $nombre;
    }


    public function getDescription(){
        return $this->attributes['descripcion'];
    }

    public function setDescription($descripcion){
        $this->attributes['descripcion'] = $descripcion;
    }

    public function getStartDate(){
        return $this->attributes['fechaInicio'];
    }

    public function setStartDate($fechainicio){
        $this->attributes['fechaInicio'] = $fechainicio;
    }


    public function getEndingDate(){
        return $this->attributes['fechaFin'];
    }

    public function setEndingDate($fechaFin){
        $this->attributes['fechaFin'] = $fechaFin;
    }

    public function getCreatedAt(){
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt){
        $this->attributes['created_at'] = $createdAt; 
    }

    public function getUpdatedAt(){
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt){
        $this->attributes['updated_at'] = $updatedAt;
    }


    public static function validate($request){
        $request->validate([
            "nombre" => "required|max:255",
            "descripcion" => "required|max:255",
            "fechaInicio" => "required|max:255",
            "fechaFin" => "required|max:255",
        ]);
    }

    //relacion uno a muchos
    public function eventParticipants(){
        return $this->hasMany(EventParticipant::class);
    }

    

    
}
