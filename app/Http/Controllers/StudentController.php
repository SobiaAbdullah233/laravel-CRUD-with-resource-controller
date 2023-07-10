<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = StudentModel::all();
        return view('view_all_students')->with($data);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        StudentModel::create($request->except('_token'));
        session()->flash('msg', "Student added successfully");
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        session()->flash('msg', "Student edit successfully");
        $student = StudentModel::findOrFail($id);
        return view('edit',compact('student'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'marks' => 'required',
        ]);
        $student = StudentModel::findOrFail($id);
        // dd($valid);
        $student->update($valid);
        // dd('got here');
        session()->flash('msg', "Student updated successfully");
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = StudentModel::find($id);
        $student->delete();

        // return redirect()->route('students.index');
        return redirect()->route('students.index')->with('msg', 'Post deleted dsuccesssfully');

    }
}
