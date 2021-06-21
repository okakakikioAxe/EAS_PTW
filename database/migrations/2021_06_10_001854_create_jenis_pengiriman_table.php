<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisPengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pengiriman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pengiriman');
            $table->integer('biaya_per_kg')->default('1000');
            $table->integer('biaya_per_km')->default('1000');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_pengiriman');
    }
}
