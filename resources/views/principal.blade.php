@extends('layouts/main')

@section('content')
    <div class="container">
        <section>
            <div class="row my-2"> <!--Row Superior-->
                <div class="col col-md-12">
                    <form id="myForm" class="form-inline justify-content-center">
                        <h6 class="mr-2">Id Reservacion</h6>
                        <div class="form-group">
                            <input type="text" class="form-control" id="busqueda" placeholder="Inserte Codigo de Reserva">
                        </div>
                        <button type="submit" class="btn btn-primary">Ir al Pedido</button>
                    </form>
                </div>
            </div class="row">
            <div class="row my-2"><!--Row Inferior-->
                    <div class="col col-md-6">
                            <img  id="imgbar"class="my-2" src="https://i.ibb.co/fdryx2c/Diagrama-Relacional-Gesto-Bar.png" alt="ImagenGrande"> <!--453x250-->
                    </div>
                    <div class="col col-md-6">
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


        </section>
    </div>
@endsection
