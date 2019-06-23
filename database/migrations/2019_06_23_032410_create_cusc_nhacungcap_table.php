<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_nhacungcap', function (Blueprint $table) {
            $table->unsignedSmallInteger('ncc_ma')
                ->autoIncrement()
                ->comment('Nhà cung cấp sản phẩm'); 
            $table->String('ncc_ten',191)
                ->comment('Tên nhà cung cấp  sản phẩm');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_nhacungcap');
    }
}
