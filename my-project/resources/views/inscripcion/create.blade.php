@extends('layouts.app')
@section('title', 'Inscribete')
@section('content')

    <div class="row">
        <div class="col">
          <h1 class="d-flex justify-content-center">Formulario para inscribirse al evento: {{$event['event']->getName()}}</h1>
          @if ($errors->any())
          <ul class="alert alert-danger list-unstyled">
              @foreach ($errors->all() as $error)
                  <li>- {{ $error }}</li>
              @endforeach
          </ul>
          @endif
          <form method="POST" action="{{ route('inscripcion.store') }}" class="row g-3 mt-1 p-2">
            @csrf
            <div class="col-md-6">
              <label for="inputAPPaterno" class="form-label">Apellido paterno</label>
              <input name="apellidoPaterno" type="text" class="form-control" id="inputAPPaterno" required>
            </div>
            <div class="col-md-6">
                <label for="inputAPMaterno" class="form-label">Apellido Materno</label>
                <input name="apellidoMaterno" type="text" class="form-control" id="inputAPMaterno" required>
            </div>
            <div class="col-md-6">
                <label for="inputNombres" class="form-label">Nombres</label>
                <input name="nombres" type="text" class="form-control" id="inputNombres" required>
            </div>
            <div class="col-md-6">
                <label for="inputCorreo" class="form-label">Correo Electrónico</label>
                <input name="email" value="{{ old('email') }}" type="text" class="form-control" id="inputCorreo" required>
            </div>
            <div class="col-md-6">
                <label for="inputNumero" class="form-label">Teléfono</label>
                <input name="telefono" type="tel" class="form-control" id="inputNumero" required>
            </div>
            <div class="col-md-6">
                <label for="inputGenero" class="form-label">Género</label>
                <input name="genero" type="text" class="form-control" id="inputGenero" placeholder="M ó F" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>
    </div>
@endsection