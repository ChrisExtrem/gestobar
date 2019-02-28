@extends('layouts.basic')

@section('head_content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('ruta_items')

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Lista de los pedidos disponibles</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Id Pedido</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($facturas as $factura)
                        <tr>
                            <th scope="row">{{$factura->id}}</th>
                            <td>{{$factura->cliente}}</td>
                            <td>{{$factura->total}}</td>
                            <td>{{$factura->fecha}}</td>
                            <td>{{$factura->pedido_id}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
