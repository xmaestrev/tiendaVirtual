@include('layouts.header-principal')

    <div class="contenedor-producto-simple">

        <div class="imagen-producto-container">

            <img src="{{asset("storage/$producto->foto")}}" alt="">

        </div>

        <div class="info-producto-container">

            <div class="contenedor-titulo-precio">
                <div class="producto-simple-titulo">

                    {{$producto->titulo}}

                </div>
                <div class="producto-simple-precio">

                    {{$producto->precio}} €

                </div>
            </div>

            {{-- <div class="producto-simple-categoria">

                <i class="fa fa-sun-o" aria-hidden="true"></i> Categoria: <span class="producto-categoria">{{$categoria}}</span>

            </div> --}}
            
            <div class="producto-simple-descripcion">

                <i class="fa fa-sun-o espaciado" aria-hidden="true"></i> Descripción: <br><span class="producto-descripcion">{{$producto->descripcion}}</span>

            </div>
            <div class="producto-simple-stock">

                <i class="fa fa-sun-o" aria-hidden="true"></i> Unidades disponibles: <span class="producto-stock">{{$producto->stock}}</span>

            </div>

            <div class="botones-producto-simple">

                @if (Auth::check())

                    <form method="POST" class="form-anadir-cesta" action="{{route("anadir-cesta")}}">
                        @csrf                  
                        <input type="hidden" name="id_producto" value="{{$producto->id}}">
                        <button type="submit" class="boton-cesta">Añadir a la cesta</button>
                    </form>


                    <form method="POST" class="form-comprar-ahora" action="{{route("comprar-ahora")}}">
                        @csrf
                        <input type="hidden" name="id_producto" value="{{$producto->id}}">
                        <button type="submit" class="boton-comprar">Comprar ahora</button>
                    </form>

                @else
                <div class="form-anadir-cesta">
                    <a href="{{route("login")}}" class="boton-cesta">Añadir a la cesta</a>
                </div>

                <div class="form-anadir-cesta">
                    <a href="{{route("login")}}" class="boton-comprar">Comprar ahora</a>
                </div>

   
                @endif

            </div>


        </div>

    </div>

@include('layouts.footer-principal')