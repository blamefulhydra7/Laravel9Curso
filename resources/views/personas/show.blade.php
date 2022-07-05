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
    <div class="d-flex justify-content-between" style="width: 150px">
        <a href="{{url('/persona/' . $persona->id . '/edit')}}"><button class="btn btn-primary">Editar</button></a>
        <form action="{{url('/persona/' . $persona->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </form>
    </div>

@endsection
