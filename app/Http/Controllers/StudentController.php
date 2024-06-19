<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = student::all();
        // dd($students);
        return view('students.index',  compact('students'));
    }
    
    public function create()
    {
        //
    }

       public function store(Request $request)
    {
        //
    }
    
    public function show(Student $student)
    {
        //
    }
    
    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }
   
    public function destroy(Student $student)
    {
        //
    }
}
