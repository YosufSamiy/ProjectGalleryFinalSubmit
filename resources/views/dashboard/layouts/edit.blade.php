
@section('page-title')
    Edite Photo
@endsection
@extends('dashboard.layouts.header')

<style>

    .blog-section {

        margin-left: -200px;
    }


    .imgs {
        width: 100px;
    }

    .blog-section {
        margin-left: 30px;

    }
</style>

<br>

<div class="container">
    <br>

    <!-- Large -->    <br>
    <br>
    <br>
    <br>

    <select name="cars" class="custom-select-lg">
        <option selected>شو رايك تختار نوع الملف</option>
        <option value="volvo">صورة</option>
        <option value="fiat">ملف</option>
        <option value="audi">فيديو</option>


    </select>
    <br><br>



        <form method="POST"    ID="formImgInp" action="{{route('dashboard.photo.update',$photo->id)}}" enctype="multipart/form-data" >
        @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" name="name" value="{{$photo->name}}" class="form-control" placeholder="اسم العمل " require>
            </div>

            <input class="form-control input-lg" type="file" name="fileToUpload" id="fileToUpload"
                   class="btn btn-success" value="شو رايك ترفعلك

    صورة ">شو رايك ترفعلك صورة
        <br>
        <h2>وصف العمل </h2>


        <textarea placeholder="وصف المشروع"   class="form-control input-lg" name="description" cols="20" rows="20">{{$photo->description}}</textarea>

        <br>

        <input type="submit" class="btn btn-success" value="اديني ضغطة هان خلينا نرفع الصورة">



        </form>
</div>
</div>

