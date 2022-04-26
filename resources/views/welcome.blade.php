@include('layouts.header-principal')

<div class="contenedor-inicio">

    <div class="categorias-destacadas">

        <div class="titulo-seccion-categorias">
            CATEGORIAS <span>MAS RELEVANTES</span> 
        </div>

        <div class="categorias-relevantes">
            @foreach ($categorias as $categoria)
                <a class="categoria-inicio-link" href="/catalogo/categoria/{{$categoria->id}}">
                    <div class="categoria-inicio">
                        {{$categoria->nombre}}
                    </div> 
                </a>
            @endforeach
        </div>

    </div>

    <div class="categorias-destacadas">

        <div class="titulo-seccion-categorias">
            PRODUCTOS <span>MAS RELEVANTES</span> 
        </div>

        <div class="categorias-relevantes">
            @foreach  ($productos as $producto)
            <form class="categoria-inicio-link" method="POST" action="/catalogo/{{$producto->id}}">
                @csrf
                    <input type="hidden" name="id_producto" value="{{$producto->id}}">
                    <div class="categoria-inicio" style="background-image: url({{asset("storage/$producto->foto")}}); background-size: cover;">
                        <button type="submit"><div style="background-color: rgb(45, 43, 43); padding:10px;">{{$producto->titulo}}</div></button>
                    </div> 

            </form>
            @endforeach
        </div>

        
    </div>

</div>


@include('layouts.footer-principal')