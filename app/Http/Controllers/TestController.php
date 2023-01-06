<?php

namespace App\Http\Controllers;

use App\Models\GheBan;
use App\Models\LichChieu;
use App\Models\Phong;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $ten_san_pham = 'Iphone 14 Promax do controller';

        return view('vue_01', compact('ten_san_pham'));
    }

    public function jquery()
    {
        dd(phpinfo());

       return view('AdminRocker.page.test');
    }

    public function test()
    {
        $list_lich_chieu = LichChieu::get();
        $tat_ca_ghe = Phong::join('ghes', 'ghes.id_phong', 'phongs.id')
                           ->get();
        foreach ($list_lich_chieu as $value) {
            foreach ($tat_ca_ghe as $value_phong) {
                if($value_phong->id == $value->id_phong) {

                }
            }
        }
    }
}
