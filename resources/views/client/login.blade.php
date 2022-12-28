@extends('client.master')
@section('content')
<div class="row" id="app">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <button class="btn" v-on:click="hienDangKy()">Đăng Kí</button>
                    <button class="btn" v-on:click="hienDangNhap()">Đăng Nhập</button>
                </div>
            </div>
            <div class="card-body">
                <form id="dangKi">
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" class="form-control" placeholder="Nhập Email">
                    </div>
                    <div class="form-group">
                        <label >Họ Và Tên</label>
                        <input type="text" class="form-control" placeholder="Nhập Họ và tên">
                    </div>

                    <div class="form-group">
                        <label >Số Điện Thoại</label>
                        <input type="tel" class="form-control" placeholder="Nhập số diện thoại">
                    </div>

                    <div class="form-group">
                        <label >Mật Khâur</label>
                        <input type="password" class="form-control" placeholder="Nhập Mật khẩu">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Đăng Kí</button>
                    </div>
                </form>

                <form id="dangNhap">
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" class="form-control" placeholder="Nhập Email">
                    </div>
                    <div class="form-group">
                        <label >Mật Khẩu</label>
                        <input type="password" class="form-control" placeholder="Nhập Mật khẩu">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Đăng Nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        new Vue({
        el      :   '#app',
        data    :   {

        },
        created()   {
            $("#dangKi").hide();
        },
        methods :   {
            hienDangKy()
            {
                $("#dangKi").show();
                $("#dangNhap").hide();
            },

            hienDangNhap()
            {
                $("#dangKi").hide();
                $("#dangNhap").show();
            },
        },
    });
    </script>
@endsection
