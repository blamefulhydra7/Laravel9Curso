@extends('layouts.main')

@section('content')
    <ul>
        @foreach($autos as $auto)
            <li>
                <a href="{{url('/auto/' . $auto->id)}}">
                    {{$auto->id . ": " . $auto->marca}}
                </a>
            </li>
        @endforeach
    </ul>
    <a href="{{url('auto/create')}}">
        <button class="btn btn-primary">Crear</button>
    </a>
@endsection
