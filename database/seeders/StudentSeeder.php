<?php

namespace Database\Seeders;

use App\Models\Student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        Student::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'image' => '01.jpg',
            'cni'=>'1-9', 
            'lastname'=>'apellido',           
            'category'=>'Infantil',
            'range'=>'Tigre',
            'birthday'=>'2024-01-01',
            'phone'=>'569 12345678',
            'tutor'=>'',     
                  
        ]);

        Student::create([
            'name' => 'estudiante1',
            'email' => 'estudiante1@pjud.cl',
            'image' => 'mati_01.png',
            'cni'=>'1-9', 
            'lastname'=>'apellido',           
            'category'=>'Infantil',
            'range'=>'Dragon',
            'birthday'=>'2024-01-01',
            'phone'=>'569 12345678',
            'tutor'=>'',  
        ]);

        Student::create([
            'name' => 'estudiante2',
            'email' => 'estudiante2@pjud.cl',
            'image' => 'Student-02.jpg',
            'cni'=>'1-9', 
            'lastname'=>'apellido',           
            'category'=>'Infantil',
            'range'=>'Dragon',
            'birthday'=>'2024-01-01',
            'phone'=>'569 12345678',
            'tutor'=>'',  
        ]);

        Student::create([
            'name' => 'estudiante3',
            'email' => 'estudiante3@pjud.cl',
            'image' => 'Student-03.jpg',
            'cni'=>'1-9', 
            'lastname'=>'apellido',           
            'category'=>'Infantil',
            'range'=>'Tigre',
            'birthday'=>'2024-01-01',
            'phone'=>'569 12345678',
            'tutor'=>'',  
        ]);

        Student::create([
            'name' => 'estudiante4',
            'email' => 'estudiante4@pjud.cl',
            'image' => 'Student-04.jpg',
            'cni'=>'1-9', 
            'lastname'=>'apellido',           
            'category'=>'Senior',
            'range'=>'gup',
            'birthday'=>'2024-01-01',
            'phone'=>'569 12345678',
            'tutor'=>'',  
        ]);

        Student::create([
            'name' => 'estudiante5',
            'email' => 'estudiante5@pjud.cl',
            'image' => 'Student-05.jpg',  
            'cni'=>'1-9', 
            'lastname'=>'apellido',           
            'category'=>'Juvenil',
            'range'=>'gup',
            'birthday'=>'2024-01-01',
            'phone'=>'569 12345678',
            'tutor'=>'',  
        ]);
    }
}
