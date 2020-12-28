<?php

namespace App\Http\Controllers;

use App\photo;
use App\Video;
use Illuminate\Http\Request;

class FrontSiteController extends Controller
{

    public function showPhoto(){
        $photo=photo::paginate(12);

        return view('frontsite.photo')->with('photo',$photo);
    }

    public function showPhotoDitels($id){
        $photo=photo::all();

        $phod = photo::find($id);
        return view('frontsite.photo-detail',compact(['photo','phod']));
    }

    public function showVideo(){
   $video=Video::all();
        return view('frontsite.videos')->with('video',$video);
;}

    public function showAbout(){
        return view('frontsite.about');
    }

    public function showContact(){
        return view('frontsite.contact');
    }
}
