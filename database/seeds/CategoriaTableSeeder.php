<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();

        App\Categoria::create([
            'name' => 'Adultos',
        ]);

        App\Categoria::create([
            'name' => 'Niños',
        ]);

        App\Categoria::create([
            'name' => 'Deportes',
        ]);

        App\Categoria::create([
            'name' => 'Politica',
        ]);

        App\Categoria::create([
            'name' => 'Educacion',
        ]);
    }
}
