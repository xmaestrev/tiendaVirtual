<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ProductoSimpleController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ComprarController;
use App\Http\Controllers\CarritoController;

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// INICIO

Route::get('/', function () {

    $sql = 'SELECT * FROM categorias LIMIT 4';
    $categorias = DB::select($sql);

    $sql = 'SELECT * FROM productos WHERE publicado = "1" LIMIT 4';
    $productos = DB::select($sql);

    return view('welcome', ["productos" => $productos, "categorias" => $categorias]);
})->name("home");

// INICIO SESION

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// ADMINISTRADOR

Route::view("/admin", "administrador.panel");

Route::get("/admin/categorias", [CategoriaController::class, "index"])->name("categorias");
Route::post("/admin/categorias/eliminar", [CategoriaController::class, "eliminar"])->name("eliminar-categoria");
Route::post("/admin/categorias/crear", [CategoriaController::class, "crear"])->name("crear-categoria");

Route::get("/admin/productos/nuevo-producto", [ProductoController::class, "index"])->name("nuevo-producto");
Route::post("/admin/productos/nuevo-producto/crear", [ProductoController::class, "crear"])->name("crear-producto");

Route::get("/admin/producto/listar", [ProductoController::class, "listarProductos"])->name("listar-productos");
Route::post("/admin/producto/editar/{nombreProducto}", [ProductoController::class, "editarProducto"]);
Route::post("/admin/productos/editar/editado", [ProductoController::class, "productoEditado"])->name("producto-editado");
Route::post("/admin/producto/eliminar/{nombreProducto}", [ProductoController::class, "eliminarProducto"]);

// GENERAL

Route::get("/catalogo", [CatalogoController::class, "index"])->name("catalogo");

Route::post("/catalogo/{idProducto}", [ProductoSimpleController::class, "index"]);




// CLIENTE

Route::post("/catalogo/anadirCesta/wtf", [ProductoSimpleController::class, "anadirCesta"])->name("anadir-cesta");
Route::post("/cesta/eliminar", [CarritoController::class, "eliminarCesta"])->name("eliminar-cesta");


Route::post("/comprar/", [ProductoSimpleController::class, "conmprarAhora"]);






Route::get("/catalogo/categoria/{idCategoria}", [CatalogoController::class, "catalogoCategoria"]);

Route::get("/cesta", [CarritoController::class, "index"])->name("cesta");
