<?php

namespace App\Http\Controllers;

use App\Models\DetallesPedido;
use App\Models\Pedido;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    function pagarCompra(Request $request){


            $nProductos = str_split($request->input("id_producto"));

            $pedido = new Pedido();
            $pedido->fecha_pedido = Carbon::now();
            $pedido->id_user = Auth::user()->id;
            $pedido->save();

            for($x=0; $x<count($nProductos); $x++){

                $detallePedido = new DetallesPedido();
                $detallePedido->id_pedido = $pedido->id;
                $detallePedido->id_producto = $nProductos[$x];
                $detallePedido->save();
            
                DB::table('cesta')
                ->where('id_user', Auth::user()->id)
                ->where('id_producto', $nProductos[$x])
                ->limit(1)
                ->delete();
            
            }
            return redirect("/");
        
    }   

}
