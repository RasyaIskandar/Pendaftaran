<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all(); 
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|string|max:255',
            'gender'=>'required',
            'email'=>'required|string|email|max:255|unique:students',
            'phone'=>'required|string|max:20',
            'address'=>'required|string|max:255',
            'school_origin'=>'required|string|max:255',
            'unit'=>'required',
            'registration_type'=>'required',
        ]);

        // $student = new Student();
        // $student->name = $request->input('name');
        // $student->gender = $request->input('gender');
        // $student->email = $request->input('email');
        // $student->phone = $request->input('phone');
        // $student->address = $request->input('address');
        // $student->school_origin = $request->input('school_origin');
        // $student->unit = $request->input('unit'); 
        // $student->registration_type = $request->input('registration_type'); 
        // $student->save();

        Student::create($validateData);
        return redirect()->route('students.index')->with('success', 'Student Registered Successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
