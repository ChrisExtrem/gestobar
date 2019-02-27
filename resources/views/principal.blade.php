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
            


        </section>
    </div>
@endsection
