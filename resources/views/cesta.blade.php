@include('layouts.header-principal')

<div class="container-mi-carrito">



        <div class="mis-productos">

            @if (empty($productos))
                <h3>TU CESTA ESTÁ VACIA</h3>
            @else
            <?php 
                $precioTotal = 0;
            ?>
            
               @foreach ($productos as $item)

                <?php 
                
                    $precioTotal += $item[0]->precio;
                ?>

                    <div class="producto-cesta">
                        
                        <img class="imagen-producto-cesta" src="{{asset("storage/".$item[0]->foto)}}" alt="">
                        <div class="info-producto-cesta">
                            <div class="nombre-producto-cesta">{{$item[0]->titulo}}</div>
                            <div class="descripcion-producto-cesta">{{$item[0]->descripcion}}</div>
                            <div class="precio-producto-cesta">{{$item[0]->precio}}€</div>
                        </div>

                        <form action="{{route("eliminar-cesta")}}" method="post" class="eliminar-cesta">
                            @csrf
                            <input type="hidden" name="id_producto" value="{{$item[0]->id}}">
                            <button class="eliminar-producto-cesta" type="submit">X</button>
                        </form>

                    </div>

                @endforeach
 
            @endif

        </div>

        <div class="comprar-todo">

            <form method="POST" class="form-pagar-carrito" action="">
                <label for="">Titular de la tarjeta: </label>
                <input type="text">
                

                <label for="">Número de la tarjeta:</label> 
                <input type="number" max="99999999999999">
                
                <label for="">CVV: </label>
                <input type="number" max="999">

                <div class="precio-total">Precio total: 
                    <?php

                    if(!empty($productos))echo $precioTotal. "€";
                    
                    ?>
                </div>

                <div class="boton-compra-cesta">
                    <button type="submit" class="boton-comprar-carrito"> COMPRAR</button>
                </div>
            
            </form>

        </div>

</div>


@include('layouts.footer-principal')
