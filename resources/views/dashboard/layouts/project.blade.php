
@section('page-title')
    Prject Manger
@endsection
@extends('dashboard.layouts.header')
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<div class="container">
<div class="row tm-mb-90 tm-gallery">
    <section>

    @foreach($photo as $info)

    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5 "style="border: 2.5px solid black "  >
        <figure class="effect-ming tm-video-item">
            <img src="{{asset($info->paht)}}" alt="Image" class="img-fluid" width="250" height="250"  style="padding:5px">
            <figcaption class="d-flex align-items-center justify-content-center">
                <br>

                <h2>{{$info->name}}</h2>
                <br>

                <form action="{{route('dashboard.photo.delete',$info->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="حدف">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a type="button"  href="{{route('dashboard.photo.edit',$info->id)}}" class="btn btn-info">تعديل </a>

                </form>



                {{--                <a href="photo-detail.html">View more</a>--}}
            </figcaption>
        </figure>
        <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">12 Oct 2020</span>

            <span>12,460 views</span>
        </div>

    </div>
    @endforeach


    </section>





</div>
{{--    {{$photo->links()}}--}}

</div>
