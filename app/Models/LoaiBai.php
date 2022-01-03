<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiBai extends Model
{
    use HasFactory;
    protected $table ="loai_bai";
    use SoftDeletes;
}
