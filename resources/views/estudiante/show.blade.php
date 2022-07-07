@extends('layouts.main')

@section('content')
    <ul class="list-group">
        <li class="list-group-item">Nombre: {{$estudiante->nombre}}</li>
        <li class="list-group-item">Apellido: {{$estudiante->apellido}}</li>
        <li class="list-group-item">Sexo: {{$estudiante->sexo}}</li>
        <li class="list-group-item">Número de control: {{$estudiante->nControl}}</li>
        <li class="list-group-item">Carrera: {{$estudiante->carrera}}</li>
    </ul>
    <div class="row">
        <div class="col-md-2">
            <a href="{{url('/estudiante/' . $estudiante->id . '/edit')}}" class="btn btn-primary">Editar</a>
        </div>
        <div class="col-md-2">
            <form action="{{url('/estudiante/' . $estudiante->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

@endsection
