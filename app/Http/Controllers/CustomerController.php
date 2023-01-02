<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterAccountRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\KichHoatTaiKhoanMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function actionUpdatePassword(UpdatePasswordRequest $request)
    {
        $customer = Customer::where('hash_reset', $request->hash_reset)->first();

        $customer->hash_reset = '';
        $customer->password = bcrypt($request->password);
        $customer->save();

        toastr()->success('Đã cập nhật mật khẩu thành công!');

        return redirect('/login');
    }

    public function viewUpdatePassword($hash)
    {
        $customer = Customer::where('hash_reset', $hash)->first();

        if($customer) {
            return view('client.cap_nhat_mat_khau', compact('hash'));
        } else {
            toastr()->error('Liên kết không tồn tại!');
            return redirect('/');
        }
    }

    public function actionResetPassword(ResetPasswordRequest $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        $hash     = Str::uuid();

        $customer->hash_reset = $hash;
        $customer->save();

        toastr()->success('Vui lòng kiểm tra email');

        return redirect()->back();
    }

    public function viewResetPassword()
    {
        return view('client.quen_mat_khau');
    }

    public function viewRegister()
    {
        return view('client.register');
    }

    public function actionRegister(RegisterAccountRequest $request)
    {
        $data = $request->all();
        $hash = Str::uuid(); // tạo ra 1 biến tên hash kiểu string có 36 ký tự không trùng với nhau
        $data['hash_mail'] = $hash;
        $data['password']  = bcrypt($data['password']);
        Customer::create($data);

        $dataMail['ho_va_ten'] = $request->ho_va_ten;
        $dataMail['hash_mail'] = $hash;

        Mail::to($request->email)->send(new KichHoatTaiKhoanMail($dataMail));

        toastr()->success('Đã tạo tài khoản thành công!');
        return redirect()->back();
    }

    public function viewLogin()
    {
        return view('client.login');
    }

    public function actionLogin(LoginRequest $request)
    {
        $data['email']      = $request->email;
        $data['password']   = $request->password;
        $check = Auth::guard('customer')->attempt($data);
        if($check) {
            $customer = Auth::guard('customer')->user();
            if($customer->loai_tai_khoan == -1) {
                toastr()->error("Tài khoản đã bị khóa!");
                Auth::guard('customer')->logout();
            } else if($customer->loai_tai_khoan == 0) {
                toastr()->warning("Tài khoản chưa được kích hoạt!");
                Auth::guard('customer')->logout();
            } else {
                toastr()->success("Đã đăng nhập thành công!");
            }
        } else {
            toastr()->error("Tài khoản hoặc mật khẩu không đúng!");
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
