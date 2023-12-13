@extends('layouts.app')
@section('title', 'Registrate a un evento')
@section('content')
    <div class="row row-cols-1 row-cols-md-2 g-4 ">
        @foreach($events['eventos'] as $event)
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-white">
                  <h4 class="card-title">{{$event->getName()}}</h4>
                  <p class="card-text">{{$event->getDescription()}}</p>
                  <p class="card-text">Fecha Inicio: {{$event->getStartDate()}}</p>
                  <p class="card-text">Fecha de Término: {{$event->getEndingDate()}}</p>
                  <a href="{{route('inscripcion.create', ['id' => $event->getId()])}}" class="card-link">
                    <button type="button" class="btn btn-danger">Inscribirse</button>
                  </a>
                </div>
            </div> 
        </div>
        @endforeach
    </div>
@endsection