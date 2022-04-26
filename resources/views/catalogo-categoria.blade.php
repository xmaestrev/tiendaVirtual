@include('layouts.header-principal')

<div class="contenedor-catalogo">

    <div class="catalogo-catalogo-categoria">


    @foreach ($productos as $item)

    @if ($item->publicado == 1)

    <form method="POST" action="/catalogo/{{$item->id}}">
        @csrf
        <input type="hidden" name="id_producto" value="{{$item->id}}">

        <div class="producto-catalogo-admin" style="background-image: url({{asset("storage/$item->foto")}});">

                <div class="info-producto-catalogo">
                    <div class="titulo-producto">
                        {{$item->titulo}}
                    </div>
                    <div class="precio-producto">
                        {{$item->precio}}€
                    </div>
                </div>

        <button type="submit" style="color: white; background-color: #ed1d49; padding:10px;">Ver mas</button>
    </form>
            

        </div>
    @endif
        


    @endforeach

    </div>

    <a class="ir-catalogo" href="{{route("catalogo")}}">VER TODOS LOS PRODUCTOS</a>



</div>


@include('layouts.footer-principal')