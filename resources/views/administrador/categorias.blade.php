@extends('layouts.header-admin')

    <div class="container-categorias">
        <div class="container-tabla-categorias">
            <table class="tabla-categorias">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de actualización</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $item)
                        <tr class="categoria">
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>
                                <form method="POST" action="{{ route('eliminar-categoria') }}">
                                    @csrf
                                    <input type="hidden" name="categoria" value="{{$item->id}}">
                                    <button class="eliminar-categoria">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        

        <div class="container-nueva-categoria">
            <h2>AÑADIR CATEGORIA</h2>
            <form class="form-categoria" method="POST" action="{{ route('crear-categoria') }}">
                @csrf
                <div>
                    <x-label for="nombre" :value="__('Nombre : ')" />
    
                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" required autofocus />
                </div>
                    <x-button class="crear-categoria">
                        {{ __('Crear Categoria') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>



@include('layouts.footer')