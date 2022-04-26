<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\VarDumper;

class ProductoController extends Controller
{
    function index(){

        $sql = 'SELECT * FROM categorias';
        $categorias = DB::select($sql);

        return view("administrador.nuevo-producto", ["categorias" => $categorias]);
    }

    function crear(Request $request){

        $producto = new Producto();
        $producto->titulo = $request->input("titulo");
        $producto->descripcion = $request->input("descripcion");
        
        $filename = time() . "." . $request->file("foto")->extension();
        $request->file('foto')->move(public_path("storage"), $filename);
        
        $producto->foto = $filename;
        $producto->precio = $request->input("precio");
        $producto->stock = $request->input("stock");
        $producto->publicado = true;
        $producto->id_categoria = $request->input("id_categoria");
        $producto->save();

        return redirect()->back();
    }

    function listarProductos(){

        $sql = 'SELECT * FROM productos';
        $productos = DB::select($sql);

        $sql = 'SELECT * FROM categorias';
        $categorias = DB::select($sql);
        
        return view("administrador.listar-productos", ["productos" => $productos, "categorias" => $categorias]);
    }

    function editarProducto(Request $request){
        $sql = 'SELECT * FROM categorias';
        $categorias = DB::select($sql);

        $producto = DB::table('productos')->where('id', $request->input("idProducto"))->first();
        return view("administrador.editar-producto", ["categorias" => $categorias, "producto" => $producto]);
    }

    function eliminarProducto(Request $request){
        DB::table('productos')->where('id', $request->input("idProducto"))->delete();
        return redirect()->back();
    }

    function productoEditado(Request $request){
        DB::table('productos')
              ->where('id', $request->input("id"))
              ->update([
                  
                'titulo' => $request->input("titulo"),
                'descripcion' => $request->input("descripcion"),
                'precio' => $request->input("precio"),
                'stock' => $request->input("stock"),
                'publicado' => $request->input("publicado"),
                'id_categoria' => $request->input("id_categoria"),
            
            ]);

            return redirect(route("listar-productos"));
    }


}
