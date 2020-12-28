{{--@if(Session::has('success'))--}}

{{--    <div class="alert alert-success alert-dismissible">--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--        <h5><i class="icon fas fa-check"></i> Success!</h5>--}}
{{--        {{(Session::get('success')}}--}}

{{--    </div>--}}
{{--@endif--}}


@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3><i class="icon fas fa-check"></i> عاش يباشا</h3>
        {{session()->get('success')}}
    </div>
@endif

@if(session()->has('contact'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3><i class="icon fas fa-check"></i>متشكرين </h3>
        {{session()->get('contact')}}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3><i class="icon fas fa-check"></i>خطأ يباشا </h3>
        {{session()->get('error')}}
    </div>
@endif

@if($errors->any())

    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h1><i class="icon fas fa-ban"></i> تنبيه!</h1>
        <h3>
            @foreach($errors->all() as $error)

                {{$error}}<br>
        @endforeach
        </h3>
    </div>
{{--يباشا لو بتسمح تعبي البيانات كلهم عشان نخلص ونرفعهم على الداتا بيز--}}
@endif
