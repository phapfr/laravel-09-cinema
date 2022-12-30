<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterAccountRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function viewRegister()
    {
        return view('client.register');
    }

    public function actionRegister(RegisterAccountRequest $request)
    {
        $data = $request->all();
        $hash = Str::uuid(); // tạo ra 1 biến tên hash kiểu string có 36 ký tự không trùng với nhau
        $data['hash_mail'] = $hash;
        // $data['password']  = md5($data['password']);
        Customer::create($data);

        toastr()->success('Đã tạo tài khoản thành công!');
        return redirect()->back();
    }

    public function viewLogin()
    {
        return view('client.login');
    }

    public function actionLogin(LoginRequest $request)
    {
        $check = Customer::where('email', $request->email)
                         ->where('password', $request->password)
                         ->first();
        if($check) {
            if($check->loai_tai_khoan == -1) {
                toastr()->error("Tài khoản đã bị khóa!");
            } else if($check->loai_tai_khoan == 0) {
                toastr()->warning("Tài khoản chưa được kích hoạt!");
            } else {
                toastr()->success("Đã đăng nhập thành công!");
            }
        } else {
            toastr()->error("Đã đăng nhập thất bại!");
        }

        return redirect()->back();
    }

    public function actionActive($hash)
    {
        $account = Customer::where('hash_mail', $hash)->first();
        if($account && $account->loai_tai_khoan == 0) {
            $account->loai_tai_khoan = 1;
            $account->hash_mail = '';
            $account->save();
            toastr()->success('Đã kích hoạt tài khoản thành công!');
        } else {
            toastr()->error('Thông tin không chính xác!');
        }

        return redirect('/login');
    }
}
