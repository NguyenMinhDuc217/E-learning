<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bai extends Model
{
    use HasFactory;
    protected $table ="bai";
    public function lopHoc(){
        return $this->belongsTo('App\Models\LopHoc');
    }
    public function loaiBai(){
        return $this->belongsTo('App\Models\LoaiBai');
    }
}
