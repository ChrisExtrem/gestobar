@extends('layouts/main')

@section('content')
    <section class="container">
        <div class="row my-2"><!--Row Superior-->
            <div class="col col-md-12">
                <form id="myForm" class="form-inline justify-content-center">
                    <div class="form-group">
                        <input type="text" class="form-control" id="busqueda" placeholder="Inserte Codigo de Reserva">
                    </div>
                    <button type="submit" class="btn mr-1 btn-primary">Ir al Pedido</button>
                    <button type="submit" class="btn btn-primary">Ir a Factura</button>
                </form>
            </div>
        </div class="row"><!--Fin Row Superior-->
        <div class="row"><!--Row Media-->
            <div class="col col-md-12">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reservaciones <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pedidos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Facturas</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!--Fin Row Media-->
        <div class="row my-2"><!--Row Inferior-->
                <div class="col col-md-12">
                    <article>
                        Seccion de Notificaciones
                    </article>
                </div>
        </div><!--Fin Row Inferior-->
    </section>
@endsection
