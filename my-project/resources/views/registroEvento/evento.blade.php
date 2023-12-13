@extends('adminlte::page')
@section('title', 'registra evento')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="pt-2 text-center">Registrar Evento</h1>
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('registroEvento.evento.store') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                    <input name="nombre" type="text" class="form-control" aria-describedby="emailHelp"
                        placeholder="Ingrese el nombre" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descripción:</label>
                    <input name="descripcion" type="text" class="form-control" placeholder="Descripción del evento"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fecha de Inicio:</label>
                    <input name="fechaInicio" type="datetime" class="form-control" placeholder="Ej: 2023-10-01 12:00:00"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fecha de Fin:</label>
                    <input name="fechaFin" type="datetime" class="form-control" placeholder="Ej: 2023-10-02 14:00:00"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection
