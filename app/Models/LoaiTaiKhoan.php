<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiTaiKhoan extends Model
{
    use HasFactory;
    protected $table ="loai_tai_khoan";

    public function dsTaiKhoan(){
        return $this->hasMany('App\Models\TaiKhoan');
    }
    use SoftDeletes;
}
