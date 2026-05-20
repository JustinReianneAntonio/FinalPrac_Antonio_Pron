<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentmngtController extends Controller
{

    public function index () {
        $students = student:: all();
        return view ('student.index', compact('students'));
    }

    public function create () {
        return view ('student.create');
    }

    public function store (Request $request) {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'age' => 'required|integer',
            'address' => 'required',
            'zip' => 'required'
        ]);

        student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function edit ($id) {
        $student = student::find($id);
        return view ('student.edit', compact('student'));
    }
    
    public function update (Request $request, $id) {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'age' => 'required|integer',
            'address' => 'required',
            'zip' => 'required'
        ]);

        $student = student::find($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }   

    public function destroy ($id) {
        $student = student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

}
