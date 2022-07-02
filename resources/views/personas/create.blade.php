@extends('layouts.main')

@section('content')
    <form method="post" action="{{url('/persona')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="exampleInputEmail1" value="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">Apellido paterno</label>
            <input type="text" name="apellidoPaterno" id="exampleInputEmail2" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" name="apellidoMaterno" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
