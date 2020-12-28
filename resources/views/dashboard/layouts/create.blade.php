@extends('dashboard.layouts.header')

@section('page-title')
    Add Photo
@endsection

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
    @include('dashboard.layouts.messages')

        <form method="POST"   ID="formImgInp" action="{{route('dashboard.photo.store')}}" enctype="multipart/form-data" >

            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="اسم العمل " >
            </div>

            <input class="form-control input-lg" type="file" name="image" id="fileToUpload"
                   class="btn btn-success" value="شو رايك ترفعلك

    صورة ">شو رايك ترفعلك صورة
        <br>
        <h2>وصف العمل </h2>



        <textarea placeholder="وصف المشروع" class="form-control input-lg" name="description" cols="20" rows="20"></textarea>

        <br>
        <input type="submit" class="btn btn-success" value="اديني ضغطة هان خلينا نرفع الصورة">



        </form>

</div>
</div>

