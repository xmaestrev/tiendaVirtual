@extends('layouts.header-admin')

<div class="contenedor-catalogo">

    <div class="catalogo-admin">


    @foreach ($productos as $item)
        
        <div class="producto-catalogo-admin" style="background-image: url({{asset("storage/$item->foto")}}); background-size: cover;">
            <form method="POST" action="/admin/producto/editar/{{$item->titulo}}">
                @csrf
                <input type="hidden" value="{{$item->id}}" name="idProducto">
                <button class="editar-producto" type="submit">EDITAR</button>
            </form>
            <form method="POST" action="/admin/producto/eliminar/{{$item->titulo}}">
                @csrf
                <input type="hidden" value="{{$item->id}}" name="idProducto">
                <button class="eliminar-producto" type="submit">ELIMINAR</button>
            </form>
            <div class="info-producto">
                <p>{{$item->titulo}}</p>
            </div>
        </div>

    @endforeach


    </div>



</div>


@include('layouts.footer')