<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;


class CategoriaTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Categoria::create([
            'nombre' => 'Alfa Romeo',
        ]);

        Categoria::create([
            'nombre' => 'Aston Martin',
        ]);

        Categoria::create([
            'nombre' => 'Buggati',
        ]);

        Categoria::create([
            'nombre' => 'Ferrari',
        ]);

    }
}

?>