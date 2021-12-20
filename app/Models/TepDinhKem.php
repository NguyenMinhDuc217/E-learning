<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TepDinhKem extends Model
{
    use HasFactory;
    protected $table ="tep_dinh_kem";
    public function bai(){
        return $this->belongsTo('App\Bai');
    }
    public function binhLuan(){
        return $this->belongsTo('App\BinhLuan');
    }
}
