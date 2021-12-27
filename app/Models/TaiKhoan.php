<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use HasFactory;
    protected $table ="tai_khoan";
    public function loaiTaiKhoan(){
        return $this->belongsTo('App\Models\LoaiTaiKhoan');
    }

    public function dsLop(){
        return $this->belongsToMany('App\Models\LopHoc','tham_gia_lop');
    }
}
