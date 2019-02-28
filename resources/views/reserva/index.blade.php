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
                    <th scope="col">Comensales</th>
                    <th scope="col">Fecha</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                        <tr>
                            <th scope="row">{{$reserva->id}}</th>
                            <td>{{$reserva->cliente}}</td>
                            <td>{{$reserva->mesa}}</td>
                            <td>{{$reserva->capacidad}}</td>
                            <td>{{$reserva->fecha}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
