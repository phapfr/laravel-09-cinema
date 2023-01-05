<?php

namespace App\Http\Controllers;

use App\Models\GheBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GheBanController extends Controller
{
    public function doiTrangThaiGheBan(Request $request)
    {
        $ghe_ban = GheBan::where('id', $request->id)->first();
        $ghe_ban->co_the_ban = !$ghe_ban->co_the_ban;
        $ghe_ban->save();
    }

    public function getData($id_lich)
    {
        $data = GheBan::where('id_lich', $id_lich)->get();

        return response()->json([
            'data'  => $data,
        ]);
    }

    public function giuChoDatVe(Request $request)
    {
        $gheBan = GheBan::where('id', $request->id)
            ->where('trang_thai', '<>', 1)
            ->first();
        if ($gheBan) {
            $gheBan->trang_thai = 2;
            $gheBan->id_khach_hang = Auth::guard('customer')->user()->id;
            $gheBan->save();

            return response()->json([
                'status'    => 1,
            ]);
        } else {
            return response()->json([
                'status'    => 0,
            ]);
        }
    }

    public function huyChoDatVe(Request $request)
    {
        $gheBan = GheBan::where('id', $request->id)
                        ->where('trang_thai', '<>', 1)
                        ->first();
        if ($gheBan) {
            $gheBan->trang_thai = 0;
            $gheBan->id_khach_hang = null;
            $gheBan->save();

            return response()->json([
                'status'    => 1,
            ]);
        } else {
            return response()->json([
                'status'    => 0,
            ]);
        }
    }
}
