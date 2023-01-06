<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phongs')->delete();

        // Reset id về lại 1
        DB::table('phongs')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('phongs')->insert([
            [
                'ten_phong'     =>"DZ FullStack 1",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 2",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 3",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 3",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 4",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 5",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 6",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
            [
                'ten_phong'     =>"DZ FullStack 7",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],[
                'ten_phong'     =>"DZ FullStack 8",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],[
                'ten_phong'     =>"DZ FullStack 9",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],[
                'ten_phong'     =>"DZ FullStack 10",
                'tinh_trang'    => rand(0,1),
                'hang_doc'      => rand(5,7),
                'hang_ngang'    => rand(5,7),
            ],
        ]);
    }
}
