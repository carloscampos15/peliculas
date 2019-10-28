@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="container">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="container">
    <h1>Agregar un video nuevo</h1>
    <p class="lead">Especificar los datos del nuevo video.</p>
    <form method="POST" action="{{ route('video.store') }}">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nombreFormControlInput">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombreFormControlInput">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="duracionFormControlInput">Duracion</label>
                    <input type="text" class="form-control" name="duracion" id="duracionFormControlInput">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="inputCategoria">Categoria</label>
                    <select id="inputCategoria" class="form-control" name="categoria">
                        @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="descripcionFormControlTextarea">Descripcion</label>
            <textarea class="form-control" id="descripcionFormControlTextarea" name="descripcion" rows="5"></textarea>
        </div>



        <button type="submit" class="btn btn-primary"><i class='fas fa-plus'></i> Crear</button>
        <a href="{{ request()->headers->get('referer') }}" class="btn btn-secondary">Cancelar</a>
    </form>

</div>
@endsection