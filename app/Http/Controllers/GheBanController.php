<?php

namespace App\Http\Controllers;

use App\Models\GheBan;
use Illuminate\Http\Request;

class GheBanController extends Controller
{
    public function getData($id_lich)
    {
        $data = GheBan::where('id_lich', $id_lich)->get();

        return response()->json([
            'data'  => $data,
        ]);
    }
}
