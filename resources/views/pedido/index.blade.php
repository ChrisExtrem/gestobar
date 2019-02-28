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
                    <th scope="col">Mesa</th>
                    <th scope="col">Id Reserva</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <th scope="row">{{$pedido->id}}</th>
                            <td>{{$pedido->cliente}}</td>
                            <td>{{$pedido->mesa}}</td>
                            <td>{{$pedido->reserva_id}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
