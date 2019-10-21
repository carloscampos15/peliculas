<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        App\User::create([
            'name' => 'Juan mora',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('hola123'),
        ]);
    }
}
