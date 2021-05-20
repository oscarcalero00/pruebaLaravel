<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Talla;
use App\Models\Marca;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
         $productos = Producto::latest()->paginate(5);

         return view('productos.index', compact('productos'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tallas = Talla::all();
        $marcas = Marca::all();
        return view('productos.create', compact(['tallas','marcas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'producto_nombre' => 'required|max:50',
            'producto_observaciones' => 'required|max:255',
            'producto_cantidad' => 'required|integer|max:999999',
            'producto_fechaembarque' => 'required|date',
            'producto_talla' => 'required',
            'producto_marca' => 'required'
        ]);
        Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        $tallas = Talla::all();
        $marcas = Marca::all();
        return view('productos.edit', compact(['producto','tallas','marcas']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $this->validate($request, [
            'producto_nombre' => 'required|max:50',
            'producto_observaciones' => 'required|max:255',
            'producto_cantidad' => 'required|integer|max:999999',
            'producto_fechaembarque' => 'required|date',
            'producto_talla' => 'required',
            'producto_marca' => 'required'
        ]);
        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminada correctamente');
    }
}
