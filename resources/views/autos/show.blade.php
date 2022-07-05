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
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('auto/' . $auto->id . '/edit')}}">
                <button class="btn btn-primary">Editar</button>
            </a>
        </div>
        <div class="col-md-4">
            <form action="{{url('auto/' . $auto->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
