<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThamGiaLop extends Model
{
    use HasFactory;
    protected $table="tham_gia_lop";
    use SoftDeletes;
}
