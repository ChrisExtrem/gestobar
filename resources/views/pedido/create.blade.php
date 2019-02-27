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
    <div class="row"><!--Row Inferior-->
        <div class="col col-md-12">
            @foreach($categorias as $categoria)
                <div id="{{$categoria->descripcion}}" class="tabcontent">
                    <h3>{{$categoria->descripcion}}</h3>
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
                                        <form action="store">
                                            <label for="tentacles">Cantidad:</label>
                                            <input type="number" id="tentacles" name="cantidad" min="1" max="100">
                                            <input type="checkbox" name="check" value="true">
                                            <input type="submit" value="Submit">

                                        </form>
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
