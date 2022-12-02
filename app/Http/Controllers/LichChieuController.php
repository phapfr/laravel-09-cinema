<?php

namespace App\Http\Controllers;

use App\Models\LichChieu;
use Illuminate\Http\Request;

class LichChieuController extends Controller
{
    public function index()
    {
        return view('AdminLTE.Page.LichChieu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LichChieu  $lichChieu
     * @return \Illuminate\Http\Response
     */
    public function show(LichChieu $lichChieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LichChieu  $lichChieu
     * @return \Illuminate\Http\Response
     */
    public function edit(LichChieu $lichChieu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LichChieu  $lichChieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LichChieu $lichChieu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LichChieu  $lichChieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(LichChieu $lichChieu)
    {
        //
    }
}
