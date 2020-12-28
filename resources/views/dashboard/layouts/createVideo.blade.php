

<style>

    .blog-section{

        margin-left:-200px;
    }


    .imgs{
        width: 100px;
    }

    .blog-section
    {
        margin-left: 30px;

    }
</style>


<div class="container">
    <br>

    <!-- Large -->
    >
    <br><br>






    <div class="">
        <form method="POST"  action="{{route('video.store')}}" enctype="multipart/form-data" >
        @csrf

            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="اسم العمل "require>
            </div>  <div class="form-group">
                <input type="text" name="paht" class="form-control" placeholder="رابط الفيديو  "require>
            </div>


            <br>
            <h2>وصف العمل </h2>


            <textarea placeholder="وصف المشروع" class="form-control input-lg" name="description" cols="20" rows="10" ></textarea>

            <br>
            <input type="submit" name="submit" class="btn btn-success" value="اديني ضغطة هان خلينا نرفع الصورة">




            <form>
    </div>
</div>
<div><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br></div>

@extends('dashboard.layouts.header')


