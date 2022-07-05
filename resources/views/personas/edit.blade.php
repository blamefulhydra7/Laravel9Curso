@extends('layouts.main')

@section('content')
    <form method="post" action="{{url('/persona/' . $persona->id)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="exampleInputEmail1" value="{{$persona->nombre}}" class="form-control">
            @error('nombre')
                <div id="emailHelp" class="form-text">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">Apellido paterno</label>
            <input type="text" name="apellidoPaterno" id="exampleInputEmail2" value="{{$persona->apellidoPaterno}}" class="form-control">
            @error('apellidoPaterno')
            <div id="emailHelp" class="form-text">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" name="apellidoMaterno" value="{{$persona->apellidoMaterno}}" id="exampleInputPassword1">
            @error('apellidoMaterno')
            <div id="emailHelp" class="form-text">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{$persona->email}}" id="exampleInputPassword2">
            @error('email')
            <div id="emailHelp" class="form-text">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
