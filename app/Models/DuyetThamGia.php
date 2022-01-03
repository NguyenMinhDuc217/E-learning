<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DuyetThamGia extends Model
{
    use HasFactory;
    protected $table="duyet_tham_gia";
    use SoftDeletes;
}
