@extends('layouts.main')

@section('content')
    <ul>
        <li>
            {{$persona->nombre}}
        </li>
        <li>
            {{$persona->apellidoPaterno}}
        </li>
        <li>
            {{$persona->email}}
        </li>
    </ul>
@endsection
