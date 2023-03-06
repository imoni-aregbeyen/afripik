<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use Illuminate\Http\RedirectResponse;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.audios-index', [
            'audios' => Audio::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.audios-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'required',
            'file' => 'required',
        ]);
        $audio = new Audio;
        $audio->user_id = auth()->user()->id;
        $audio->title = $request->title;
        $audio->author = $request->author;
        $tm  = time();
        $audio->image = $tm . '.' . $request->image->extension();
        $audio->file = $tm . '.' . $request->file->extension();
        $request->image->move(public_path('_audios'), $audio->image);
        $request->file->move(public_path('_audios'), $audio->file);
        $audio->save();
        return redirect(route('audios.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function show(Audio $audio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function edit(Audio $audio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audio $audio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Audio  $audio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audio $audio)
    {
        //
    }
}
