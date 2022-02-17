<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThongBaoMail extends Model
{
    use HasFactory;
    protected $table ="thong_bao_mail";
    public function taiKhoan(){
        return $this->belongsTo('App\Models\TaiKhoan');
    }
    use SoftDeletes;
}
