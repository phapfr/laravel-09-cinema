<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLichChieuRequest;
use App\Models\LichChieu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LichChieuController extends Controller
{
    public function index()
    {
        return view('AdminLTE.Page.LichChieu.index');
    }

    public function store(CreateLichChieuRequest $request)
    {
        $ngay_bat_dau           = Carbon::createFromFormat("Y-m-d", $request->ngay_bat_dau)->startOfDay();
        $ngay_ket_thuc          = Carbon::createFromFormat("Y-m-d", $request->ngay_ket_thuc)->addDay()->startOfDay();

        $gio_bat_dau  = Carbon::parse($request->gio_bat_dau);
        $gio_ket_thuc = Carbon::parse($request->gio_ket_thuc);

        // Nếu ngày kết thúc < ngày bắt đầu => ngày kết thúc - ngày bắt đầu > 0
        while($ngay_ket_thuc->diffInDays($ngay_bat_dau) > 0) {
            $thu_cua_ngay = $ngay_bat_dau->dayOfWeek;
            $ten          = "thu_" . $thu_cua_ngay;

            if(isset($request->$ten)) {
                // Tạo ra lịch chiếu
                $year   = $ngay_bat_dau->year;
                $month  = $ngay_bat_dau->month;
                $day    = $ngay_bat_dau->day;
                $hour_1 = $gio_bat_dau->hour;
                $mi_1   = $gio_bat_dau->minute;
                $hour_2 = $gio_ket_thuc->hour;
                $mi_2   = $gio_ket_thuc->minute;

                $thoi_gian_bat_dau  = Carbon::create($year, $month, $day, $hour_1, $mi_1, 0);
                $thoi_gian_ket_thuc = Carbon::create($year, $month, $day, $hour_2, $mi_2, 0);

                LichChieu::create([
                    'id_phong'                  => $request->id_phong,
                    'id_phim'                   => $request->id_phim,
                    'thoi_gian_chieu_chinh'     => $request->thoi_gian_chieu_chinh,
                    'thoi_gian_quang_cao'       => $request->thoi_gian_quang_cao,
                    'thoi_gian_bat_dau'         => $thoi_gian_bat_dau,
                    'thoi_gian_ket_thuc'        => $thoi_gian_ket_thuc,
                ]);
            }
            $ngay_bat_dau->addDay();
        }
    }

    public function viewThoiKhoaBieu()
    {
        return view('AdminLTE.Page.LichChieu.thoi_khoa_bieu');
    }

    public function dataThoiKhoaBieu()
    {
        $data = LichChieu::join('phims', 'lich_chieus.id_phim', 'phims.id')
                         ->join('phongs','lich_chieus.id_phong', 'phongs.id')
                         ->select('phims.ten_phim', 'phongs.ten_phong',
                                  'lich_chieus.thoi_gian_bat_dau as start',
                                  'lich_chieus.thoi_gian_ket_thuc as end'
                                )
                         ->get();
        foreach($data as $key => $value) {
            $value->title = 'Tên phim: ' . $value->ten_phim . " - Phòng: " . $value->ten_phong;
        }
        return response()->json($data);
    }
}
