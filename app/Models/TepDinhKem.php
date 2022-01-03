<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TepDinhKem extends Model
{
    use HasFactory;
    protected $table ="tep_dinh_kem";
    public function bai(){
        return $this->belongsTo('App\Models\Bai');
    }
    public function binhLuan(){
        return $this->belongsTo('App\Models\BinhLuan');
    }
    use SoftDeletes;
}
