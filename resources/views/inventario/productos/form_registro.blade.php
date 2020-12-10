@extends('principal')
@section('contenido')

<?php
use App\Models\Categoria;
$categorias = Categoria::all();
?>

<div class="container">
    <br> <br>
    <h3> Registro de Productos </h3>
    <form action ="{{ route('registrarProducto')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Producto" aria-label="nombre" aria-describedby="basic-addon1" id="nombrePro" name="nombrePro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" class="form-control" placeholder="Cantidad Producto" aria-label="cantidad" aria-describedby="basic-addon1" id="cantidadPro" name="cantidadPro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" class="form-control" placeholder="Precio Producto" aria-label="precio" aria-describedby="basic-addon1" id="precioPro" name="precioPro" required>
        </div>

        <div class="input-group mb-3">
            
            <input type="file" placeholder="Foto Producto" aria-label="foto" aria-describedby="basic-addon1" id="fotoPro" name="fotoPro" required>
        </div>

        <div class="input-group mb-3">
        <select class="browser-default custom-select" id="categoriaPro" name="categoriaPro">
                <option value="" disabled selected>Seleccione Categoria</option>
                    @foreach($categorias as $c)
                        <option value="{{ $c->id}}">{{ $c->nombreCategoria}}</option>
                    @endforeach
        </select>
            
        </div>

        <button type="submit" class="btn btn-success"> Registrar </button>

    </form>

</div>
@stop