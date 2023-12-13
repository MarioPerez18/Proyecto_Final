<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getApellidoPaterno(){
        return $this->attributes['apellidoPaterno'];
    }

    public function setApellidoPaterno($apellidoPaterno){
        $this->attributes['apellidoPaterno'] = $apellidoPaterno;
    }


    public function getApellidoMaterno(){
        return $this->attributes['apellidoMaterno'];
    }

    public function setApellidoMaterno($apellidoMaterno){
        $this->attributes['apellidoMaterno'] = $apellidoMaterno;
    }

    public function getNombres(){
        return $this->attributes['nombres'];
    }

    public function setNombres($nombres){
        $this->attributes['nombres'] = $nombres;
    }


    public function getGenero(){
        return $this->attributes['genero'];
    }

    public function setGenero($genero){
        $this->attributes['genero'] = $genero;
    }

    public function getEmail(){
        return $this->attributes['email'];
    }

    public function setEmail($email){
        $this->attributes['email'] = $email;
    }

    public function getTelefono(){
        return $this->attributes['telefono'];
    }

    public function setTelefono($telefono){
        $this->attributes['telefono'] = $telefono;
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
            "apellidoPaterno" => "required|max:255",
            "apellidoMaterno" => "required|max:255",
            "nombres" => "required|max:255",
            "email" => "required|email",
            "telefono" => "required|numeric",
            "genero" => "required",
        ]);
    }

    public function eventParticipants(){
        return $this->hasMany(EventParticipant::class);
    }

  
    
}
