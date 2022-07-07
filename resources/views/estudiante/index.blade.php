@extends('layouts.main')

@section('content')
    <ul class="list-group">
        @foreach($estudiantes as $estudiante)
            <li class="list-group-item">
                {{$estudiante->id}}. <a href="{{url('/estudiante/' . $estudiante->id)}}">{{$estudiante->nombre . ' ' . $estudiante->apellido}}</a>,
                carrera: {{$estudiante->carrera}}
            </li>
        @endforeach
    </ul>
    <a href="{{url('/estudiante/create')}}" class="btn btn-primary">Crear</a>
@endsection
