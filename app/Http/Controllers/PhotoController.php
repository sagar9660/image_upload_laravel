<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photos = photo::all();
        return view('upload', compact('photos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('/public/images/', $name);
        $photo = new photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->save();
        return redirect()->back();
        // dd($request->file());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(photo $photo)
    {
        //
    }
}
