<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    function index(){

        $sql = 'SELECT * FROM cesta WHERE id_user = '. Auth::user()->id.'';
        $productos = DB::select($sql);

        $lista_productos = [];
        
        foreach ($productos as $producto){
            $id = $producto->id_producto;
            $sql = 'SELECT * FROM productos WHERE id = '. $id .'';
            $newProducto = DB::select($sql);
            array_push($lista_productos, $newProducto);
        }
        
        return view("cesta", ["productos" => $lista_productos]);
    }

    function eliminarCesta(Request $request){

        $deleted = DB::table('cesta')
        ->where('id_user', Auth::user()->id)
        ->where('id_producto', $request->input("id_producto"))
        ->limit(1)
        ->delete();

        return redirect()->back();
    }
}
