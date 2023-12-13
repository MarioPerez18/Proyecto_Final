@extends('layouts.app')
@section('title', 'Events')
@section('content')

<div class="card mt-3">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                  
                </tr>
            </thead>
            <tbody>

                @foreach ($result as $event)
                    <td>{{$event['id']}}</td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@endsection