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

        $phim = Phim::where('id', $config->id_phim)->first();

        return view('Client.homepage', compact('config', 'phim'));
    }
}
