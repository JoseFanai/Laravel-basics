<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //he function hi siam thar a ni
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }
}
