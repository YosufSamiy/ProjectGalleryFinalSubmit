

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
    <select name="cars" class="custom-select-lg">
        <option selected>شو رايك تختار نوع الملف</option>
        <option value="volvo">صورة</option>
        <option value="fiat">ملف</option>
        <option value="audi">فيديو</option>



    </select>
    <br><br>

    </form>





    <div class="">
        <form method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="اسم العمل "require>
            </div>

            <input class="form-control input-lg" type="file" name="fileToUpload" id="fileToUpload" class="btn btn-success" value="شو رايك ترفعلك

    صورة ">شو رايك ترفعلك صورة</form>
            <br>
            <h2>وصف العمل </h2>


            <textarea placeholder="وصف المشروع" class="form-control input-lg" name="content" cols="20" rows="20" ></textarea>

            <br>
            <input type="submit" name="submit" class="btn btn-success" value="اديني ضغطة هان خلينا نرفع الصورة">




            <form>
    </div>
</div>
@extends('dashboard.layouts.header')


