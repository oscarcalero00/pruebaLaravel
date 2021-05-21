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
                <h2>Listado de Marcas </h2>
            </div>
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('marcas.create') }}" title="Create a marca"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>

            <th>Referencia</th>
            <th>Nombre</th>
            <th>Fecha Creación</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($marcas as $marca)
            <tr>
          
                <td>{{ $marca->marca_referencia }}</td>
                <td>{{ $marca->marca_nombre }}</td>

                <td>{{ date_format($marca->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">

                        <a href="{{ route('marcas.show', $marca->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('marcas.edit', $marca->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $marcas->links() !!}

@endsection

