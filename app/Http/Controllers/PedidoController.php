<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
use App\Pedido;
use App\Linea;

class PedidoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos=Pedido::all();
        return view('pedido.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $categorias=Categoria::all();
        $productos=Producto::all();
        $pedido=Pedido::find($id);
        return view('pedido.create',compact('categorias','productos','pedido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_pedido=$request->id;
        $productos_nombre=$request->nombres;
        $productos_cantidad=$request->productos;
        foreach ($productos_cantidad as $cant) {
            $i=0;
            if(isset($cant))
            {
                $temp=Producto::where('nombre',$productos_nombre[$i])->first();
                $linea=Linea::make();
                $linea->cantidad=$cant;
                $linea->producto_id=$temp->id;
                $linea->precio=$temp->precio;
                $linea->pedido_id=$request->id;
                $linea->save();
            }
            $i=$i+1;
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
