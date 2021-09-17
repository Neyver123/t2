<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $pro = new Producto();
            $resultado = $pro::get();
            return view('producto.mostrar')
                ->with('productos', $resultado)
                ->with('titulo', 'MOSTRAR PRODUCTO');
        }else{
            return redirect(route('login'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required | alpha | max:20"
        ]);

        $pro = new Producto();
        $pro->nombre = $request->nombre;
        $pro->stock = $request->stock;
        $pro->vencimiento = $request-vencimiento;
        $pro-> save();
        return redirect(Route("producto.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultado = Curso::find($id);
        return view('producto.editar', ["productos"=>$resultado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = Curso::find($id);
        $pro->nombre = $request->nombre;
        $pro->stock = $request->stock;
        $pro->vencimiento = $request->vencimiento;
        $pro-> save();
        return redirect(Route("producto.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Producto::find($id);
        $pro->delete();
        return redirect(Route("producto.index"));
    }
}
