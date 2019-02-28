<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Reserva;
//use App\Http\Controllers\PedidoControler;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');  //Evita Middleware, asi todos los invitados(guest) pueden acceder a las funciones de busqueda
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
        $reserva_id=$request->id_reserva;
        $reserva=Reserva::find($reserva_id);
        if(isset($reserva))
        {   //'Reserva Encontrada';
            $pedido = Pedido::where('reserva_id',$reserva_id)->first();
            if($pedido)
            {
                $id=$pedido->id;
                return redirect()->route('pedido.create',['id'=>$id]);
            }else{
                $temp=new Pedido;
                $temp->cliente=$reserva->cliente;
                $temp->mesa=$reserva->mesa;
                $temp->reserva_id=$reserva->id;
                $temp->save();
                $temp->refresh();
                $id=$temp->id;
                return redirect()->route('pedido.create',['id'=>$id]);
            }
        }else{
            return 'ERROR: Reserva No encontrada';
        }
    }

    public static function buscarFactura(Request $request)
    {
        $reserva_id=$request->id_reserva;
        $reserva=Reserva::find($reserva_id);
        if(isset($reserva))
        {   //'Reserva Encontrada';
            $pedido = Pedido::where('reserva_id',$reserva_id)->first();
            if($pedido){
                $pedido_id=$pedido->id;
                $factura = Factura::where('pedido_id',$pedido_id);
                if($factura){
                    //Return vista factura
                }else{
                    return 'ERROR: Factura No Emitida';
                }
            }else{
                return 'ERROR: Pedido No Realizado';
            }
        }else{
            return 'ERROR: Reserva No Encontrada';
        }
    }
}
