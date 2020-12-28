


<!-- main menu-->
@extends('dashboard.layouts.header')
<!-- / main menu-->

<div class="app-content content container-fluid">
<div class="content-wrapper">
    <section class="container">



        <table  class="table table-hover">

            <div style="padding:10px;" class="danger">
                <h1>رسائل الزوار</h1>
            </div>
            <tr class="table-info">
                <th>
                    <h3>id </h3>
                </th
                ><th>
                    <h3>اسم المستخدم</h3>
                </th>

                <th>

                    <h3>البريد الالكتروني </h3>

                </th>
                <th>
                    <h3>الرسالة</h3>
                </th>


            </tr>
                                @foreach($contact as $parson)

            <tr>
                <th>
                                        <h3>{{$parson->id}}</h3>
                                    </th>
                                    <th>
                                        <h3>{{$parson->name}}</h3>
                                    </th>
                                    <th>
                                        <h3>{{$parson->email}}</h3>

                                    </th>
                                    <th>
                                        <h3> {{$parson->description}} </h3>

                                    </th>


            </tr>

                                @endforeach


        </table>
    </section>

</div>
</div>
<div >

    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
</div>
