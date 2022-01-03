<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table ="binh_luan";
    public function bai(){
        return $this->belongsTo('App\Models\Bai');
    }
    public function taiKhoan(){
        return $this->belongsTo('App\Models\TaiKhoan');
    }
    use SoftDeletes;
}
