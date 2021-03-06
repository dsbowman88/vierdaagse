<?php

namespace App\Http\Controllers;

use DB;
use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('school.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('school.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Max 500 participants anders geen store
        if (School::fgroupTotal($request->get('group_size')) > 500){
            $error = \Illuminate\Validation\ValidationException::withMessages([
            'group_size' => ['Too many participants, try entering less'],
            ]);
            throw $error;
        };

        School::create(request()->validate([
            'schoolname' => 'required',
            'group_size' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'tour_id' => 'required',
            'user_id' => 'required']));
            return redirect('/school');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $this->authorize('update', $school);
        return view('school.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $this->authorize('update', $school);
        return view('school.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $this->authorize('update', $school);

        // Max 500 participants anders geen store
        if (School::fgroupTotal($request->get('group_size')) > 500){
            $error = \Illuminate\Validation\ValidationException::withMessages([
            'group_size' => ['Too many participants, try entering less'],
            ]);
            throw $error;
        };

        $school->update(request()->validate([
            'schoolname' => 'required',
            'group_size' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'tour_id' => 'required',
            'user_id' => 'required']));
            return redirect('/school');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $this->authorize('update', $school);

        $school->delete();
        return redirect('/school');
    }
}
