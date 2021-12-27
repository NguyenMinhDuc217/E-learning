<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\LopHoc;

class LopHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lh = new LopHoc();
        $lh->ma_lop=strtoupper(Str::random(6));
        $lh->ten_lop='Cấu trúc dữ liệu và thuật toán';
        $lh->banner='';
        $lh->logo='';
        $lh->tai_khoan_id=('2');
        $lh->save();

        $lh = new LopHoc();
        $lh->ma_lop=Str::random(6);
        $lh->ten_lop='Lập trình Windows';
        $lh->banner='';
        $lh->logo='';
        $lh->tai_khoan_id=('2');
        $lh->save();

        $lh = new LopHoc();
        $lh->ma_lop=Str::random(6);
        $lh->ten_lop='PHP';
        $lh->banner='';
        $lh->logo='';
        $lh->tai_khoan_id=('2');
        $lh->save();

        $lh = new LopHoc();
        $lh->ma_lop=Str::random(6);
        $lh->ten_lop='Lập trình di động';
        $lh->banner='';
        $lh->logo='';
        $lh->tai_khoan_id=('2');
        $lh->save();
        
        $lh = new LopHoc();
        $lh->ma_lop=Str::random(6);
        $lh->ten_lop='Toán rời rạc';
        $lh->banner='';
        $lh->logo='';
        $lh->tai_khoan_id=('2');
        $lh->save();

        
    }
}
