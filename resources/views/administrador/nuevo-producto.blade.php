@extends('layouts.header-admin')

<div class="container-nuevo-producto">

    <div class="container-form-producto">
        <form class=form-producto method="POST" action="{{route("crear-producto")}}" enctype="multipart/form-data">
          @csrf
                  <label for="fname">Titulo</label>
                  <input type="text" id="fname" name="titulo" placeholder="Titulo del producto...">
              
                  <label for="lname">Precio</label>
                  <input type="text" id="lname" name="precio" placeholder="Precio del producto...">
    
                  <label for="lname">Stock</label>
                  <input type="text" id="lname" name="stock" placeholder="Stock del producto...">
              
                  <label for="categorias">Categoria</label>
                  <select id="categorias" name="id_categoria">
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                    
                  </select>

                <label for="img">Imagen</label>
                <input name="foto" type="file" class="form-control-file" id="img">


                    <label for="exampleFormControlTextarea1">Descripción</label><br>
                    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1"></textarea>


                <button class="crear-producto" type="submit">Crear producto</button>
        </form>





</div>



@extends('layouts.footer')

