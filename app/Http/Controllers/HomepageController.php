<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\LichChieu;
use App\Models\Phim;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $config = Config::orderByDESC('id')->first();
        $phim_1 = Phim::where('id', $config->id_phim)->first();
        $phim_2 = Phim::where('id', $config->phim_2)->first();
        $phim_3 = Phim::where('id', $config->phim_3)->first();
        return view('Client.homepage', compact('config', 'phim_1', 'phim_2', 'phim_3'));

    }

    public function test()
    {
        return view('client.kich_hoat_tai_khoan');
    }

    public function chiTietPhim($slug)
    {
        $parts = explode('-', $slug);
        preg_match('/\d+$/', $slug, $matches);
        $id = $matches[0];
        $phim = Phim::where('id' , $id)->first();
        $lichChieu = LichChieu::where('id_phim', $id)
                              ->where('thoi_gian_ket_thuc', '>=', Carbon::now()->toDateTimeString())
                              ->get();

        return view('client.chi_tiet_phim' , compact('phim', 'lichChieu'));
    }

    public function viewLogin()
    {
        return view('client.login');
    }

}
