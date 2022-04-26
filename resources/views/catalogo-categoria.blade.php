@include('layouts.header-principal')

<div class="contenedor-catalogo">

    <div class="catalogo-catalogo-categoria">


    @foreach ($productos as $item)

    @if ($item->publicado == 1)
           <div class="producto-catalogo-admin" style="background-image: url({{asset("storage/$item->foto")}});">

                <a class="producto-catalogo" href="/catalogo/{{$item->id}}">
                    <div class="info-producto-catalogo">
                        <div class="titulo-producto">
                            {{$item->titulo}}
                        </div>
                        <div class="precio-producto">
                            {{$item->precio}}€
                        </div>
                    </div>
                </a>   

            </div> 
    @endif
        


    @endforeach

    </div>

    <a class="ir-catalogo" href="{{route("catalogo")}}">VER TODOS LOS PRODUCTOS</a>



</div>


@include('layouts.footer-principal')