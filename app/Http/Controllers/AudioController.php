<?php

namespace Curso\Http\Controllers;

use Curso\Audio;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audios = Audio::all();
        return view('audio.index',compact('audios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('audio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Audio::create($request->all());
        return redirect('/audio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Curso\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function show(Audio $audio)
    {
        return view('audio.show',compact('audio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Curso\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function edit(Audio $audio)
    {
       return view('audio.edit',compact('audio'));
   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Curso\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audio $audio)
    {
        $audio->update($request->all());
        return redirect('/audio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Curso\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audio $audio)
    {
        $audio->delete();
        return redirect('/audio');
    }
}
