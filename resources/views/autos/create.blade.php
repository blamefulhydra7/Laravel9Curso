@extends('layouts.main')

@section('content')
    <form method="post" action="{{url('/auto')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" id="exampleInputEmail1">
            <div id="emailHelp" class="form-text">Marca del auto a guardar.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
