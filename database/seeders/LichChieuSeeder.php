<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LichChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_chieus')->delete();

         // Reset id về lại 1
        DB::table('lich_chieus')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('lich_chieus')->insert([
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 08:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 10:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 12:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 14:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 16:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 18:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 20:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 22:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 24:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 02:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 08:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 10:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 12:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 14:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 16:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 18:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 20:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 22:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 24:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 02:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 08:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 10:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 12:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 14:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 16:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 18:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 20:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 22:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 24:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 02:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 08:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 10:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 12:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 14:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 16:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 18:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 20:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 22:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 24:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 02:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 08:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 10:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 12:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 14:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 16:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 18:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 20:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 22:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 24:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '11-01-2023 02:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 08:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 10:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 12:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 14:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 16:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 18:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 20:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 22:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 24:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '06-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '06-01-2023 02:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 08:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 10:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 12:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 14:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 16:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 18:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 20:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 22:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 24:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '07-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '07-01-2023 02:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 08:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 10:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 12:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 14:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 16:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 18:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 20:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 22:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 24:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '08-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '08-01-2023 02:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 08:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 10:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 12:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 14:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 16:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 18:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 20:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 22:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 24:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '09-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '09-01-2023 02:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 06:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 08:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 08:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 10:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 10:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 12:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 12:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 14:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 14:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 16:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 16:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 18:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 18:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 20:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 20:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 22:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 22:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 24:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '10-01-2023 24:00:00',
                'thoi_gian_ket_thuc'     =>  '10-01-2023 02:00:00',
            ],

        ]);
    }
}
