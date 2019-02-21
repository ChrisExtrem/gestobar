<!doctype html>
<html lang="en">
  <head>
    <title>Gestobar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <header class="container-flex bg-primary">
        <div class="row">
            <div class="col col-md-12">
                <button type="submit" class="btn btn-primary float-right">Login</button>
            </div>
        </div>
    </header>
    <main class="container-flex">
            <section>
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
                        <div class="col col-md-6">
                                <img  id="imgbar"class="my-2" src="img/bar.jpg" alt="ImagenGrande"> <!--453x250-->
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
        </main>

        <footer class="container-flex bg-primary footer fixed-bottom">
            <div class="row py-2 px-4">
                <div class="col col-md-12">
                    <div class="pull-right">
                        <img class="d-block imgPie" src="img/gestoBar.jpg" alt="Imagen Picsum">
                        <b class="d-block">GestoBar</b>
                    </div>
                </div>
            </div>
        </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
