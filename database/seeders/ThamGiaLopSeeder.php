<?php

namespace Database\Seeders;

use App\Models\ThamGiaLop;
use Illuminate\Database\Seeder;

class ThamGiaLopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            $tgl = new ThamGiaLop();
            $tgl->tai_khoan_id =3;
            $tgl->lop_hoc_id =rand(1,5);
            $tgl->save();
        }
    }
}
