<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.photos-index', [
            'photos' => Photo::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'files' => 'required',
            'files.*' => ''
        ]);
        $files = [];
        if ($request->hasFile('files'))
        {
            foreach ($request->file('files') as $file)
            {
                $name = time() . rand(10,99). '.' . $file->getClientOriginalExtension();
                $file->move(public_path('_photos'), $name);
                $files[] = $name;
            }
        }
        $photo = new Photo();
        $photo->user_id = auth()->user()->id;
        $photo->title = $request->title;
        $photo->files = json_encode($files);
        $photo->save();

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('admin.photos-show', [
            'photo' => $photo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->title = $request->title;
        $photo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $files = json_decode($photo->files, true);
        foreach ($files as $file)
        {
            File::delete(public_path("_photos\\$file"));
        }
        $photo->delete();
        return redirect(route('photos.index'));
    }
}
