<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    use HasFactory;
    protected $table ="lop_hoc";
    public function taiKhoan(){
        return $this->belongsTo('App\Models\TaiKhoan');
    }

    public function dstaiKhoan(){
        return $this->belongsToMany('App\Models\TaiKhoan','tham_gia_lop');
    }
    
}
