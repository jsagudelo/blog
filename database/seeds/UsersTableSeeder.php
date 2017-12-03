<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           factory(App\User::class, 29)->create();

           App\User::create([
               'name'=>'Sebastian Agudelo',
               'email'=>'sebas86_85@hotmail.com',
               'password'=>bcrypt('123')
           ]);
    }
}
