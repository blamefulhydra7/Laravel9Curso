@extends('layouts.main')

@section('content')
    <ul>
        @foreach($personas as $persona)
            <li>
                <a href="{{url('/persona/' . $persona->id)}}">{{$persona->id . ' ' . $persona->nombre}}</a> {{$persona->apellidoPaterno}}
            </li>
        @endforeach
    </ul>
    <a href="{{url('persona/create')}}"><button class="btn btn-primary">Crear</button></a>
@endsection
