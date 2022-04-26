<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use GuzzleHttp\Handler\Proxy;

class ProductoTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Producto::create([
            'titulo' => 'Stelvio',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'stelvio.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 1
        ]);

        Producto::create([
            'titulo' => 'Tonale',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'tonale.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 1
        ]);

        Producto::create([
            'titulo' => 'Giulia',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'giulia.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 1
        ]);

        Producto::create([
            'titulo' => 'DBX',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'dbx.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 2
        ]);

        Producto::create([
            'titulo' => 'Vantage',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'vantage.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 2
        ]);

        Producto::create([
            'titulo' => 'Veyron',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'vayron.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 3
        ]);

        Producto::create([
            'titulo' => 'Chiron',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'foto' => 'chiron.PNG',
            'precio' => 100000,
            'stock' => 10,
            'publicado' => true,
            'id_categoria' => 4
        ]);
    }
}

?>