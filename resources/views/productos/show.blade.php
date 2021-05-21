@extends('layouts.app')

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ADD8E6;">
    <a href="/">
        <img src="https://www.tiendapp.net/images/logo-tiendapp.png" />
    </a>
    &nbsp;
    &nbsp;
    <a href="/marcas">
        Marcas
    </a>
    &nbsp;
    &nbsp;
    <a href="/productos">
        Productos
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
    </div>
</nav>
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Producto:  {{ $producto->producto_nombre }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productos.index') }}" title="Regresar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $producto->producto_nombre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha Creación:</strong>
                {{ date_format($producto->created_at, 'jS M Y') }}
            </div>
        </div>
    </div>

@endsection
