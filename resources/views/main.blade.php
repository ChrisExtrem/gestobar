@extends('layouts.basic')

@section('content')
    <div class="container">
        <section>
            <div class="row my-2"><!--Row Superior-->
                <div class="col col-md-12">
                <form id="myForm" class="form-inline justify-content-center" action="{{route('buscar')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="id_reserva" class="form-control" placeholder="Inserte Codigo de Reserva">
                            <button type="submit" name="submit" value="pedido" class="btn mr-1 btn-light">Ir al Pedido</button>
                        @auth
                            <button type="submit" name="submit" value="factura" class="btn btn-light">Ir a Factura</button>
                        @endauth
                        </div>
                    </form>
                </div>
            </div class="row"><!--Fin Row Superior-->
            @auth
            <div class="row"><!--Row Media-->
                <div class="col col-md-12">
                    <div class="btn-group btn-group-justified  d-flex justify-content-center" role="group" aria-label="Justified button group">
                    <a class="btn btn-light" role="button" href="{{route('reserva.index')}}">Reservas</a>
                    <a class="btn btn-light" role="button" href="{{route('pedido.index')}}">Pedidos</a>
                    <a class="btn btn-light" role="button" href="{{route('factura.index')}}">Facturas</a>
                    </div>
                </div>
            </div><!--Fin Row Media-->
            <div class="row my-2"><!--Row Inferior-->
                    <div class="col col-md-12">
                        <article>
                            Seccion de Notificaciones
                        </article>
                    </div>
            </div><!--Fin Row Inferior-->
            @endauth
            @guest
            <div class="row my-2"><!--Row Inferior-->
                <div class="col-md-6">
                    <img id="imgbar"class="my-2 img-fluid" src="{{asset('img/resto-bar.webp')}}" alt="ImagenGrande"> <!--453x250-->
                </div>
                <div class="col-md-6">
                    <article>
                        <p>
                            <b>La Solucion a su negocio</b><br>
                            Brindamos un software que permite gestionar con gran facilidad los pedidos desde las mesas dentro de su local.<br>
                            Ademas de aportar un soporte para el seguimiento para la reposicion del stock en su local. <br>
                            Sus comandas nunca quedaran desatendidas gracias a nuestras implementaciones de administracion.
                        </p>
                    </article>
                </div>
            </div><!--Fin Row Inferior-->
            @endguest
        </section>
    </div>
@endsection
