<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'role_id' => '1',
        ]);
    }
}
