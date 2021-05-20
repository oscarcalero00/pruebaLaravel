@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Marca :  {{ $marca->marca_nombre }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('marcas.index') }}" title="Regresar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $marca->marca_nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Referencia:</strong>
                {{ $marca->marca_referencia }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha Creación:</strong>
                {{ date_format($marca->created_at, 'jS M Y') }}
            </div>
        </div>
    </div>

@endsection
