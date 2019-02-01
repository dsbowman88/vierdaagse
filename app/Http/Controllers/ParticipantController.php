<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('participant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant.create');
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
        if (Participant::all()->count() > 500){
            dd('Too many participants');
        };

        //
        Participant::create(request()->validate([
            'name' => 'required',
            'email' => 'required',
            'tour_id' => 'required',
            'user_id' => 'required']));
        return redirect('/participant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        $this->authorize('update', $participant);
        return view('participant.show', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        $this->authorize('update', $participant);
        return view('participant.edit', compact('participant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        $this->authorize('update', $participant);
        $participant->update(request()->validate([
            'name' => 'required',
            'email' => 'required',
            'tour_id' => 'required'
        ]));
        return redirect('/participant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        $this->authorize('update', $participant);
        $participant->delete();
        return redirect('/participant');
    }
}
