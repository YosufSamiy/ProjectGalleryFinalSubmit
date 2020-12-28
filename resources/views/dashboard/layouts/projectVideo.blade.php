
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

        @foreach($video as $as)

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">

                    <iframe width="250" height="200" src="https://www.youtube.com/embed" frameborder="0" allowfullscreen></iframe>

                    </iframe>
                    <h3 style="color: #000000">{{$as->name}}</h3>

                    <form action="{{route('dashboard.video.delete',$as->id)}}" method="POST">

                      @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="حدف">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-info">تعديل </button>

                    </form>

                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span>14 Aug 2020</span>
                </div>
            </div>
        @endforeach

    </div> <!-- row -->





    </div>
</div>
