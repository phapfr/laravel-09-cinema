<?php

namespace App\Http\Controllers;

use App\Models\LichChieu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LichChieuController extends Controller
{
    public function index()
    {
        return view('AdminLTE.Page.LichChieu.index');
    }

    public function store(Request $request)
    {
        $ngay_bat_dau           = Carbon::createFromFormat("Y-m-d", $request->ngay_bat_dau)->startOfDay();
        $ngay_ket_thuc          = Carbon::createFromFormat("Y-m-d", $request->ngay_ket_thuc)->addDay()->startOfDay();

        $gio_bat_dau  = Carbon::parse($request->gio_bat_dau);
        $gio_ket_thuc = Carbon::parse($request->gio_ket_thuc);

        while($ngay_ket_thuc->diffInDays($ngay_bat_dau) > 0) {
            $thu_cua_ngay = $ngay_bat_dau->dayOfWeek;
            $ten          = "thu_" . $thu_cua_ngay;

            if(isset($request->$ten)) {

            }
            $ngay_bat_dau->addDay();
        }
    }
}
