@extends('adminlte::page')
@section('title', 'Editar Evento')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="pt-2 text-center">Editar Evento</h1>
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('eventos.update', ['id' => $events['event']->getId()]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                    <input name="nombre" value="{{ $events['event']->getName() }}" type="text"
                        class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Descripcion:</label>
                    <input name="descripcion" value="{{ $events['event']->getDescription() }}" type="text"
                        class="form-control">
                </div>
                
                
                <div class="mb-3">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">fechaInicio:</label>
                    <input name="fechaInicio" value="{{ $events['event']->getStartDate() }}" type="text"
                        class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">fechaFin:</label>
                    <input name="fechaFin" value="{{ $events['event']->getEndingDate() }}" type="text"
                        class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
