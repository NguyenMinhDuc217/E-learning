<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LopHoc;

class LopHocController extends Controller
{
    function layDanhSach(){
        $dsLopHoc=LopHoc::all();
        return view('admin/lop-hoc', compact('dsLopHoc'));
    }
}
