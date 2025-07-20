<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('course')->get();
        return view(view: 'doctors.list')->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Doctor::create($request->all());
        $doctors = Doctor::all();

        return redirect()->route('doctors.index')->with('doctors', $doctors);
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
        $edit = Doctor::findOrFail($id);
        return view('doctors.edit')->with('doctor', $edit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Doctor::findOrFail($id)->update($request->all());

        return redirect()->route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Doctor::findOrFail($id);
        $delete->delete();

        return redirect()->route('doctors.index');
    }
}
