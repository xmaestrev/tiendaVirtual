<?php

namespace App\Http\Controllers;

use App\Models\Cesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ProductoSimpleController extends Controller


{
    function index(Request $request){



        $producto = DB::table('productos')
                ->where('id',  $request->input("id_producto"))
                ->get();
        
        return view("producto-simple", ["producto" => $producto[0]]);
    }

    function anadirCesta(Request $request){

        $cesta = new Cesta();
        $cesta->id_producto = $request->input("id_producto");
        $cesta->id_user = auth()->user()->id;
        $cesta->save();

        return redirect("/");

    }

    function comprarAhora(Request $request){
        $producto = DB::table('productos')->where('id', $request->input("id_producto"))->first();

        return view("/comprar", ["producto" => $producto]);
    }
}
