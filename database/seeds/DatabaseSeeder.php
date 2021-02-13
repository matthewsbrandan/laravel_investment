<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'cpf' => '47615628890',
            'name' => 'Mateus Brandão',
            'phone' => '19995446606',
            'birth' => '19990201',
            'gender' => 'm',
            'email' => 'mateusfleria@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
