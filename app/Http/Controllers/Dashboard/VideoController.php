<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Photo;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */



    public function index()
    {

        $video = Video::all();


//        dd($photo);
        return view('dashboard.layouts.projectVideo', compact("video"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video=Video::orderBy('name','desc')->get();
        return view('dashboard.layouts.createVideo',compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video=new Video();
        $video->name=$request->name;
        $video->description=$request->description;
        $video->paht=$request->path;
        $video->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sVideo = Video::find($id);
        $sVideo->delete();

//        dd($photo);
        return redirect()->back();
    }
}
