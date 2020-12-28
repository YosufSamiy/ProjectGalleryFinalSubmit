<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Photo;
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
        $photo=  photo::select('id','name','description')->where('id','>','1')->get();
        $count=count($photo);

        return response([
            'status'=>'success',
            'count'=>$count,
            'data'=>$photo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|max:15 ',
            'description'=>'required ',
//            'image'=>'required ',
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



        $photo=  Photo::create([


            'name' => $request->name,
            'description'=>$request->description,
            'paht'=>$request->filePath,

        ]);

        return response([

            'status'=>'photo created successfully',
            'photo'=>$photo,

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return response([
            'status'=>'success',
            'data'=>$photo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
//    public function edit(Photo $photo)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {      $request->validate([
        'name'=>'required|max:15 ',
        'description'=>'required ',
//            'image'=>'required ',
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



//        $photo=  Photo::update([


        $photo->name =$request->name;
        $photo->description=$request->description;
        $photo->paht=$request->filePath;

        $photo->save();


//        ]);

        return response([

            'status'=>'photo updated successfully',
            'photo'=>$photo,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();

        return response([

            'status'=>'  photo  delet successfully ',
            'data'=>$photo,

        ]);
    }
}
