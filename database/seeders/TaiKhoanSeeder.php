<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\TaiKhoan;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tk = new TaiKhoan();
        $tk->username=('Admin');
        $tk->password=Hash::make('123456');
        $tk->email=('admin@gmail.com');
        $tk->ho_ten=('Administrator');
        $tk->sdt=('0123456789');
        $tk->loai_tai_khoan_id=('1');
        $tk->save();

        $tk = new TaiKhoan();
        $tk->username=('GiangVien');
        $tk->password=Hash::make('123456');
        $tk->email=('giangvien@gmail.com');
        $tk->ho_ten=('Giangvien');
        $tk->sdt=('9876543210');
        $tk->loai_tai_khoan_id=('2');
        $tk->save();

        $tk = new TaiKhoan();
        $tk->username=('SinhVien');
        $tk->password=Hash::make('123456');
        $tk->email=('sinvien@gmail.com');
        $tk->sdt=('0123498765');
        $tk->ho_ten=('Sinhvien');
        $tk->loai_tai_khoan_id=('3');
        $tk->save();
    }
}
