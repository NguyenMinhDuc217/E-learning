<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\LoaiTaiKhoan;

class LoaiTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ltk = new LoaiTaiKhoan();
        $ltk->ten_loai_tai_khoan=('Admin');
        $ltk->save();

        $ltk = new LoaiTaiKhoan();
        $ltk->ten_loai_tai_khoan=('GiaoVien');
        $ltk->save();

        $ltk = new LoaiTaiKhoan();
        $ltk->ten_loai_tai_khoan=('SinhVien');
        $ltk->save();
    }
}
