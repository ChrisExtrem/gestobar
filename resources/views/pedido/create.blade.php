@extends('layouts.basic')

@section('head_content')

@endsection

@section('ruta_items')

@endsection

@section('content')

<div class="container"><!--Inicio Container-->
    <div class="row"><!--Row Superior-->
        <div class="col col-md-12">
            <h3>Menú de Productos</h3>
        </div>
    </div><!--End Row Superior-->
    <div class="row"><!--Row Media-->
        <div class="col col-md-12">
            <div class="tab">
                @foreach($categorias as $categoria)
                    <button class="tablinks" onclick="openTab(event, '{{$categoria->descripcion}}')">{{$categoria->descripcion}}</button>
                @endforeach
            </div>
        </div>
    </div><!--End Row Media-->
    <form action="">
    <div class="row"><!--Row Inferior-->
        <div class="col col-md-12">
            @foreach($categorias as $categoria)
                <div id="{{$categoria->descripcion}}" class="tabcontent"><!--Pestaña-->
                    <div class="row"><!--Row Interna de la Pestaña-->
                        @foreach($productos as $producto)
                            @if ($producto->categoria_id==$categoria->id)

                                <div class="col-md-4">
                                    <div class="card"><!--Inicio Card Producto-->
                                        <img src="#" alt="" class="mt-3 rounded-circle card-img-top mx-auto">
                                        <br>
                                        <div class="card-body"><!--Inicio Card Body-->
                                            <h5 class="card-title text-center">{{$producto->nombre}}}</h5>
                                            <p class="card-text">
                                            <b>Descripcion:</b>{{$producto->descripcion}}}<br>
                                            <b>Precio: $</b>{{$producto->precio}}}<br>
                                            </p>
                                        </div><!--Fin Card Body-->
                                        <div class="botonera form-inline">
                                            <label class="mx-2" for="text">Cantidad: </label>
                                            <input class="mx-2 form-control input-sm" type="number" id="#" name="#" min="1" max="100">
                                            <span> Pedir: </span>
                                            <input class="mx-2 align-self-center" type="checkbox" name="check" value="true">
                                        </div>
                                    </div><!--Fin Card Producto-->
                                    <br>
                                </div>

                            @endif
                        @endforeach
                    </div><!--Fin Row Interna de la Pestaña-->
                </div>
            @endforeach
        </div>
    </div><!--End Row Inferior-->
    <div class="row mt-3"><!--Row Submit-->
        <div class="col col-md-12 form-inline">
            <b>Id Pedido: </b><label name="id_pedido" value="{{$pedido->id}}" for="#">{{$pedido->id}}</label><b class="ml-3">Cliente: </b>{{$pedido->cliente}} <b class="ml-3">Mesa: </b>{{$pedido->mesa}}
            <input class="ml-3 btn btn-light active" type="submit" value="Pedir">
        </div>
    </div><!--Row Submit-->
</div><!--Fin Container-->

<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


@endsection
