@extends('layouts.main')

@section('content')
    <ul>
        <li>
            {{$auto->id}}
        </li>
        <li>
            {{$auto->marca}}
        </li>
    </ul>
@endsection
