@extends('layouts.header-admin')

<div class="container-nuevo-producto">

    <div class="container-form-producto">
        <form class=form-producto method="POST" action="{{route("producto-editado")}}" enctype="multipart/form-data">
          @csrf
                  <input type="hidden" name="id" value="{{$producto->id}}">

                  <label for="fname">Titulo</label>
                  <input type="text" id="fname" name="titulo" value="{{$producto->titulo}}">
              
                  <label for="lname">Precio</label>
                  <input type="text" id="lname" name="precio" value="{{$producto->precio}}">
    
                  <label for="lname">Stock</label>
                  <input type="text" id="lname" name="stock" value="{{$producto->stock}}">
              
                  <label for="categorias">Categoria</label>
                  <select id="categorias" name="id_categoria" >
                    @foreach ($categorias as $categoria)
                        @if ($categoria->id == $producto->id_categoria)
                          <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>               
                        @else
                           <option value="{{$categoria->id}}">{{$categoria->nombre}}</option> 
                        @endif       
                    @endforeach
                    
                  </select>

                <label for="img">Imagen</label>
                <input name="foto" type="file" class="form-control-file" id="img" value="{{$producto->foto}}">

                <label for="visible">Publicado</label>
                  <select id="visible" name="publicado" >
                      @if ($producto->publicado == 1)
                        <option value="1" selected>Publicado</option>
                        <option value="0">No publicado</option>               
                      @else
                      <option value="1">Publicado</option>
                      <option value="0" selected>No publicado</option> 
                      @endif       
                  </select>



                    <label for="exampleFormControlTextarea1">Descripción</label><br>
                    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1">{{$producto->descripcion}}</textarea>


                <button class="crear-producto" type="submit">Editar producto</button>
        </form>





</div>



@extends('layouts.footer')