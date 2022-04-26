@include('layouts.header-principal')

<div class="container-catalogo">

    <div class="filtos">

        <form action="">
            <h3>Precio</h3>
            <input type="range" min="10000" max="100000" step="10000">
            <h3>Categoria</h3>
            @foreach ($categorias as $categoria)
            <label class="label-categoria-filtro" for="categoria-filtro"><input type="checkbox" name="categoria-filtro" value="{{$categoria->id}}">{{$categoria->nombre}}</input></label><br>
            @endforeach
            <button type="submit">Filtrar</button>
        </form>

    </div>


    <div class="contenedor-catalogo-principal">

        <div class="catalogo">


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
    </div>
</div>



@include('layouts.footer-principal')