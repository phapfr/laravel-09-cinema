<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Phim;
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
}
