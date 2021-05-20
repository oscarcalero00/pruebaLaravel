@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listado de productos </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('productos.create') }}" title="Create a producto"> <i class="fas fa-plus-circle"></i>
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
            <th>Numero</th>
            <th>Nombre</th>
            <th>Observaciones</th>
            <th>Cantidad</th>
            <th>Fecha Embargue</th>
            
            <th>Fecha Creación</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $producto->producto_nombre }}</td>
                <td>{{ $producto->producto_observaciones }}</td>
                <td>{{ $producto->producto_cantidad }}</td>
                <td>{{ $producto->producto_fechaembarque }}</td>
                <td>{{ date_format($producto->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">

                        <a href="{{ route('productos.show', $producto->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('productos.edit', $producto->id) }}">
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

    {!! $productos->links() !!}

@endsection
