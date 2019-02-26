@extends('layouts.main')

@section('head_content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}"/>
@endsection

@section('content')
<h3>Fade in Tabs</h3>

<div class="tab">
  @foreach($categorias as $categoria)
    <button class="tablinks" onclick="openTab(event, '{{$categoria->descripcion}}')">{{$categoria->descripcion}}</button>
  @endforeach
</div>

@foreach($categorias as $categoria)
    <div id="{{$categoria->descripcion}}" class="tabcontent">
        <h3>{{$categoria->descripcion}}</h3>
        @foreach($productos as $producto)
            @if ($producto->categoria_id==$categoria->id)
                <h6>Id de Producto:{{$producto->id}}</h6>
                <p>Nombre de Producto:{{$producto->nombre}}</p>
            @endif
        @endforeach
    </div>
@endforeach


        


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
