<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai', function (Blueprint $table){
            $table->id();
            $table->date('ngay_tao');
            $table->date('han_nop');
            $table->integer('diem')->de;
            $table->string('noi_dung');
            $table->integer('lop_hoc_id');
            $table->integer('loai_bai_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
