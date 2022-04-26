@include("layouts.header-principal")

<div class="container-mi-carrito">



    <div class="mis-productos">


                <div class="producto-cesta">
                    
                    <img class="imagen-producto-cesta" src="{{asset("storage/".$producto->foto)}}" alt="">
                    <div class="info-producto-cesta">
                        <div class="nombre-producto-cesta">{{$producto->titulo}}</div>
                        <div class="descripcion-producto-cesta">{{$producto->descripcion}}</div>
                        <div class="precio-producto-cesta">{{$producto->precio}}€</div>
                    </div>

                </div>


    </div>

    <div class="comprar-todo">

        <form method="POST" class="form-pagar-carrito" action="{{route("pagar-compra")}}">
            @csrf
            <label for="">Titular de la tarjeta: </label>
            <input type="text" name="nombre">
            

            <label for="">Número de la tarjeta:</label> 
            <input type="number" max="99999999999999" value="num_tarjeta">
            
            <label for="">CVV: </label>
            <input type="number" max="999" name="cvv">

            <div class="precio-total">Precio total: 
                {{$producto->precio}}
            </div>

            <input type="hidden" name="id_producto" value="{{$producto->id}}">

            <div class="boton-compra-cesta">
                <button type="submit" class="boton-comprar-carrito"> COMPRAR</button>
            </div>
        
        </form>

    </div>

</div>