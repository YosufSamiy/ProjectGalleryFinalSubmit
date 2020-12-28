<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Photo;
use Dotenv\Validator;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

//use MongoDB\Driver\Session;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Cookie::queue('colleg','IT',60*24*2);

//        $photo=photo::all();

//        dd($photo);

//
//        Session::put("coures",'Stb');
//
//
////        dd(Session::get('coures'));
//
//
//        if(Session::has('coures')){
//
//            dd("welecom YOUSF");
//        }
        $photo=photo::paginate(112);
        return view('dashboard.layouts.project')->with('photo',$photo);

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $photos=photo::orderBy('name','desc')->get();
        return view('dashboard.layouts.create',compact('photos'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){



        $request->validate([
            'name'=>'required|max:15 ',
            'description'=>'required ',
            'image'=>'required ',
        ]);

//
//        $rules=[];
//
//
//
//
//        $messages=[
//
//        ];
//        ($request->all(),$rules,$messages);
//        $validator= V
//
//        if ($validator->fails()){
//            return redirect()->back()->withErrors($validator->error())->withInput();
//        }


//        dd($request->toArray());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $image_new_name = time() .'.'. $image->getClientOriginalExtension();//Getting Image Extension
            $image->move("storage/image/",$image_new_name);
            $filePath = "storage/image/" . $image_new_name;
        }

       $photo=new photo();
        $photo->name=$request->name;
        $photo->description=$request->description;
        $photo->paht=$filePath;


        $photo->save();
//        return redirect()->back();
        return redirect()->back()->with('success', 'تم اضافة عمل جديد يباشا');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo=photo::find($id);
        return view('dashboard.layouts.edit',compact('photo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        if($request->hasfile('fileToUpload')){
            $image = $request->file('fileToUpload');
            $image_new_name = time() .'.'. $image->getClientOriginalExtension();//Getting Image Extension
            $image->move("storage/image/",$image_new_name);
            $filePath = "storage/image/" . $image_new_name;
        }

        $photo=photo::find($id);
        $photo->name=$request->name;
        $photo->description=$request->description;
        $photo->paht=$filePath;

        $photo->update();
        $photo=photo::all();

        return view('dashboard.layouts.project')->with('photo',$photo);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pho = photo::find($id);
        $pho->delete();
        $photo=photo::all();
        return  redirect()->back();

    }
}
