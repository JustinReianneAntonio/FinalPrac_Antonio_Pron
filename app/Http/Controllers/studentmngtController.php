<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/student;
class studentmngtController extends Controller
{

    public function index () {
        $students = student:: all();
        return view ('student.index');
    }

    public function create () {
        return view ('student.create');
    }
}
