<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'avatar' => '01.jpg',
            'perfil' => 'admin',           
            'password' =>bcrypt('admin123')
        ]);

        User::create([
            'name' => 'usuario1',
            'email' => 'usuario1@pjud.cl',
            'avatar' => 'user-01.jpg',
            'perfil' =>'usuario',
            'password' =>bcrypt('12345678')          
        ]);
        User::create([
            'name' => 'usuario2',
            'email' => 'usuario2@pjud.cl',
            'avatar' => 'user-02.jpg',
            'perfil' =>'usuario',
            'password' =>bcrypt('12345678')          
        ]);
        User::create([
            'name' => 'usuario3',
            'email' => 'usuario3@pjud.cl',
            'avatar' => 'user-03.jpg',
            'perfil' =>'usuario',
            'password' =>bcrypt('12345678')          
        ]);
        User::create([
            'name' => 'usuario4',
            'email' => 'usuario4@pjud.cl',
            'avatar' => 'user-04.jpg',
            'perfil' =>'usuario',
            'password' =>bcrypt('12345678')          
        ]);
        User::create([
            'name' => 'usuario5',
            'email' => 'usuario5@pjud.cl',
            'avatar' => 'user-05.jpg',
            'perfil' =>'usuario',
            'password' =>bcrypt('12345678')          
        ]);
    }
}
