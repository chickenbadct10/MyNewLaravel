<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_hinhanh', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')
                ->comment('Mã sản phẩm');
            $table->unsignedTinyInteger('ha_stt')
                ->default('1')
                ->comment('số thứ tự hình ảnh');
            $table->String('ha_ten',150)
                ->comment('Hình ảnh tên');
            $table->foreign('sp_ma')
                ->references('sp_ma')
                ->on('cusc_sanpham')
                ->onDelete('RESTRICT') // Sẽ xóa dữ liệu khi xóa cha, RESTRISCT sẽ không xóa khi đang sử dụng ở thằng con
                ->onUpdate('CASCADE');// đặt khóa ngoại        
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_hinhanh');
    }
}
