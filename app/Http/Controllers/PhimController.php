<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    public function index() {
        return view('AdminLTE.Page.Phim.index');
    }

    public function store(Request $request)
    {
        $phim = Phim::where('slug_ten_phim' , $request->slug_ten_phim)->first();
        if($phim) {
            return response()->json([
                'slug' => true,
            ]);
        } else {
            Phim::create([
                'ten_phim'          => $request->ten_phim,
                'slug_ten_phim'     => $request->slug_ten_phim,
                'dao_dien'          => $request->dao_dien,
                'dien_vien'         => $request->dien_vien,
                'the_loai'          => $request->the_loai,
                'thoi_luong'        => $request->thoi_luong,
                'ngay_khoi_chieu'   => $request->ngay_khoi_chieu,
                'avatar'            => $request->avatar,
                'mo_ta'             => $request->mo_ta,
                'trailer'           => $request->trailer,
                'tinh_trang'        => $request->tinh_trang,
            ]);

            return response()->json([
                'trang_thai_them_moi' => true,
            ]);
        }
    }

    public function getData()
    {
        $data = Phim::all();

        return response()->json([
            'phim'  => $data,
        ]);
    }
}
