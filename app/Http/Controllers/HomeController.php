<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Reserva;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public static function show()
    {
        //return view('pedido/create/{id}');
    }

    public function buscar(Request $request)
    {
        switch ($request->input('submit')) {
            case 'pedido':
                return $this->buscarPedido($request); //Si es busqueda de Pedido
                break;

            case 'factura':
                return $this->buscarFactura($request); //Si es busqueda de factura
                break;
        }
    }

    public static function buscarPedido(Request $request)
    {
        $reserva_id = $request->input('reserva_id');
        $reserva=Reserva::find($reserva_id);
        $pedido = Pedido::where('reserva_id','=',$reserva_id); //firstOrFail()  ???? Una vez encontrado o no cambiar cliente y mesa
        
        if(empty($pedido))
        {
            return 'Encontrado';
        }else{
            return 'No encontrado';
        }

        foreach ($pedidos as $pedido => $value) {
            # code...
        }
    }

    public static function buscarFactura(Request $request)
    {
        return 'hola';
    }
}
