@extends('adminlte::page')
@section('title', 'Participantes')

@section('content')
    <h1 class="text-center pt-2">Participantes</h1>
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Evento</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($participants as $participant)
                        <tr>
                            <td>{{ $participant->id }}</td>
                            <td>{{ $participant->nombres }}</td>
                            <td>{{ $participant->evento }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection