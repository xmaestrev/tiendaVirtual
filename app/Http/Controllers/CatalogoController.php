<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller{

  /**

     * @param  \Illuminate\Http\Request  $request
     * @param  string  $idCategoria
     * @return \Illuminate\Http\Response
     */


    function index(){

        $sql = 'SELECT * FROM productos';
        $productos = DB::select($sql);

        $sql = 'SELECT * FROM categorias';
        $categorias = DB::select($sql);
        
        return view("catalogo", ["productos" => $productos, "categorias" => $categorias]);
    }

    function catalogoCategoria(Request $request, $idCategoria){

        $sql = 'SELECT * FROM productos WHERE id_categoria = '.$idCategoria.'';
        $productos = DB::select($sql);

        return view("catalogo-categoria", ["productos" => $productos, "categoria" => $idCategoria]);

    }
}
