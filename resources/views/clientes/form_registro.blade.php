@extends('principal')
@section('contenido')

<div class="container">
    <br> <br>
    <h3> Registro de Categorias </h3>
    <form action ="{{url('categorias/registro')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Producto" aria-label="nombre" aria-describedby="basic-addon1" id="nombrePro" name="nombreCat" required>
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
            <input type="number" class="form-control" placeholder="Cantidad Producto" aria-label="cantidad" aria-describedby="basic-addon1" id="cantidadPro" name="cantidadPro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" class="form-control" placeholder="Precio Producto" aria-label="precio" aria-describedby="basic-addon1" id="precioPro" name="precioPro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Foto Producto" aria-label="foto" aria-describedby="basic-addon1" id="fotoPro" name="fotoPro" required>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="categoria Producto" aria-label="categoria" aria-describedby="basic-addon1" id="categoriaPro" name="categoriaPro" required>
        </div>

        <button type="submit" class="btn btn-success"> Registrar </button>

    </form>

</div>

@stop