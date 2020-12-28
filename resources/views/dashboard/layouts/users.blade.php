@extends('dashboard.layouts.header')
<div class="container">
    <div>  <br>

        <br>
        <br> <br>
        <br>
    </div>

<h1 class="text-center">Manage Members</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center manage-members table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Username</td>
                <td>Email</td>
                <td>control</td>
            </tr>


        </table>
    </div>

    <a href='users.php?do=Add' class="btn btn-primary"><i class="fa fa-plus"></i> New Member</a>

</div>


<div class="danger">
    <h1 class="text-center">اضافة محرر او مدير</h1>
</div>
<div class="container">
    <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
        <!-- Start UserName Field -->
        <div class="form-group">
            <div class="form-control">
                <input type="text" name="username" class="form-control"  autocomplete="off" Placeholder="اسم المستخدم"/>
            </div>
        </div>
        <!-- End UserName Field -->
        <!-- Start Password Field -->
        <div class="form-group">
            <div class="form-control">
                <input type="Password" name="Password" class="password form-control" autocomplete="new-password" autocomplete="off" Placeholder="كلمة مرور صعبة"/>
                <i class="show-pass fa fa-eye fa-2x" style='position: absolute;top: 6px;right: -30px'></i>
            </div>
        </div>
        <!-- End Password Field -->
        <!-- Start Email Field -->
        <div class="form-group">
            <div class="form-control">
                <input type="email" name="email" class="form-control" autocomplete="off" Placeholder="البريد الالكتروني"/>
            </div>
        </div>
        <!-- End Email Field-->
        <!-- Start submit Field -->
        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="اضافة" class="btn btn-primary btn-lg"/>
            </div>
        </div>
        <!-- End submit Field-->
    </form>
</div>
</div>

