<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = auth()->user()->education;
        return view('education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'field' => 'required',
            'qualification' => 'required',
            'started_at' => 'required|date',
            'graduated_at' => 'required|date'
        ]);

        $education = new Education();
        $education->school_name = $request->input('school_name');
        $education->school_location = $request->input('school_location');
        $education->field = $request->input('field');
        $education->qualification = $request->input('qualification');
        $education->started_at = $request->input('started_at');
        $education->graduated_at = $request->input('graduated_at');
        $education->user_id = auth()->id();

        $education->save();
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return view('education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        // return $education;
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        // return $request->all();
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'field' => 'required',
            'qualification' => 'required',
            'started_at' => 'required|date',
            'graduated_at' => 'required|date'
        ]);

        $education->update($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }
}
