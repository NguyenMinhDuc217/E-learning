<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    use HasFactory;
    protected $table ="lop_hoc";
    public function taiKhoan(){
        return $this->belongstoMany('App\TaiKhoan');
    }
}
