@extends('layouts.main')

@section('content')
    <form method="post" action="{{url('/auto/' . $auto->id)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" id="exampleInputEmail1" value="{{$auto->marca}}">
            <div id="emailHelp" class="form-text">Marca del auto a guardar.</div>
            @error('marca')
                <div id="emailHelp" class="form-text">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="exampleInputPassword1" value="{{$auto->modelo}}">
            @error('modelo')
                <div id="emailHelp" class="form-text">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
