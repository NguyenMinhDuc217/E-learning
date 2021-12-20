<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table ="binh_luan";
    public function bai(){
        return $this->belongsTo('App\Bai');
    }
    public function taiKhoan(){
        return $this->belongsTo('App\TaiKhoan');
    }
}
