<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoriaController extends Controller
{
    function index(){

        $sql = 'SELECT * FROM categorias';
        $categorias = DB::select($sql);
        
        return view("administrador.categorias", ["categorias" => $categorias]);
    }

    function eliminar(Request $request){
        $id = $request->all("categoria");
        Categoria::where('id', $id)->delete();

        return redirect()->back();
    }

    function crear(Request $request){
        $nombre = $request->input("nombre");

        $categoria = new Categoria();
        $categoria->nombre = $nombre;
        $categoria->save();

        return redirect()->back();
    }
}
