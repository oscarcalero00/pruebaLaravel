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
                <h2>Editar Producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productos.index') }}" title="Retornar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Existen errores en el formulario.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Marca:</strong>
                <select class="form-control" name="producto_marca" value="{{ $producto->producto_marca }}">
                    @foreach($marcas as $marca)
                    <option value={{$marca->id}}>{{$marca->marca_nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Talla:</strong>
                <select class="form-control" name="producto_talla" value="{{ $producto->producto_talla }}">
                    @foreach($tallas as $talla)
                    <option value={{$talla->id}}>{{$talla->talla_nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="producto_nombre" class="form-control" placeholder="Nombre" value="{{ $producto->producto_nombre }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Observaciones:</strong>
                    <input type="text" name="producto_observaciones" class="form-control" placeholder="Name" value="{{ $producto->producto_observaciones }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad:</strong>
                    <input type="number" name="producto_cantidad" class="form-control" placeholder="Name" value="{{ $producto->producto_cantidad }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Embarque:</strong>
                    <input type="date" name="producto_fechaembarque" class="form-control" placeholder="Name" value="{{ $producto->producto_fechaembarque }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
@endsection
