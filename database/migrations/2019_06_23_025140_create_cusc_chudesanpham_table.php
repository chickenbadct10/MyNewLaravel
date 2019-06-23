<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscChudesanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_chudesanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')
                ->comment('Mã  sản phẩm');
            $table->unsignedTinyInteger('cd_ma')
                ->comment('Mã chủ đề sản phẩm');
            $table->foreign('sp_ma') // Cột khóa ngoại cua bảng
                ->references('sp_ma') // tham chiếu đến cột cha trong table cusc_loai
                ->on('cusc_sanpham')// ở cột cha cusc_loai
                ->onDelete('RESTRICT') // Sẽ xóa dữ liệu khi xóa cha, RESTRISCT sẽ không xóa khi đang sử dụng ở thằng con
                ->onUpdate('CASCADE');// đặt khóa ngoại   
            $table->foreign('cd_ma') // Cột khóa ngoại cua bảng
                ->references('cd_ma') // tham chiếu đến cột cha trong table cusc_loai
                ->on('cusc_chude')// ở cột cha cusc_loai
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
        Schema::dropIfExists('cusc_chudesanpham');
    }
}
