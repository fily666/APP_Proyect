<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'id' => '1',
                'name' => 'Barberia',
            ],
            [
                'id' => '2',
                'name' => 'Tattoo',
            ]
        ]);
    }
}
