@extends('layouts.header-admin')

<div class="container-menu-admin">

        <div class="tarjeta-admin" style="background-image: url({{asset("imagenes/nuevo-product.PNG")}}), linear-gradient(red, blue);">
            <a href="{{route("listar-productos")}}"><div>Editar/Eliminar productos</div></a>
        </div>

        <div class="tarjeta-admin" style="background-image: url({{asset("imagenes/editar-producto.PNG")}});">
            <a href="{{route("nuevo-producto")}}"><div>Añadir producto</div></a>
        </div>

        <div class="tarjeta-admin" style="background-image: url({{asset("imagenes/editar-categorias.PNG")}});">
            <a href="{{route("categorias")}}"><div>Administrar categorias</div></a>
        </div>

    </div>

@include('layouts.footer')




