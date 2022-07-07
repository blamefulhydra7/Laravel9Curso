@extends('layouts.main')

@section('content')
    <form action="{{url('/estudiante')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{old('nombre')}}" name="nombre">
            @error('nombre')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" value="{{old('apellido')}}" name="apellido">
            @error('apellido')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="M" id="m" {{(old('sexo') == 'M') ? 'checked' : ''}} name="sexo">
                <label class="form-check-label" for="m">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="F" id="f" {{(old('sexo') == 'F') ? 'checked' : ''}} name="sexo">
                <label class="form-check-label" for="f">
                    Femenino
                </label>
            </div>
            @error('sexo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nControl" class="form-label">Número de control</label>
            <input type="text" class="form-control @error('nControl') is-invalid @enderror" id="nControl" value="{{old('nControl')}}" name="nControl">
            @error('nControl')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control @error('carrera') is-invalid @enderror" id="carrera" value="{{old('carrera')}}" name="carrera">
            @error('carrera')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
