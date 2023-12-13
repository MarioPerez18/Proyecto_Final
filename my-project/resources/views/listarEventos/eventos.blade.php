@extends('adminlte::page')
@section('title', 'Lista de eventos')

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
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events['eventos'] as $event)
                    <tr>
                        <td>{{ $event->getId() }}</td>
                        <td>{{ $event->getName() }}</td>
                        <td>{{ $event->getDescription() }}</td>
                        <td>{{ $event->getStartDate() }}</td>
                        <td>{{ $event->getEndingDate() }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('eventos.edit', ['id'=> $event->getId()])}}">
                                <i class="fas fa-fw fa-pen-nib"></i>
                            </a>                                
                        </td>
                        <td>
                            <form action="{{route('eventos.destroy', $event->getId())}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection