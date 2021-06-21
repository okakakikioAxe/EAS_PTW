<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LastConfiguration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //user --fix
        DB::statement("ALTER TABLE `user` ADD `foto` MEDIUMBLOB");

        //toko --fix
        Schema::table('toko', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE `toko` ADD `foto_toko` MEDIUMBLOB");

        //pengiriman --fix
        Schema::table('pengiriman', function (Blueprint $table) {
            $table->foreign('id_pengiriman')->references('id')->on('jenis_pengiriman')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_toko')->references('id')->on('toko')->onUpdate('cascade')->onDelete('cascade');
        });

        //pembayaran --fix
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign('id_pembayaran')->references('id')->on('jenis_pembayaran')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_toko')->references('id')->on('toko')->onUpdate('cascade')->onDelete('cascade');
        });

        //barang --fix
        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('id_toko')->references('id')->on('toko')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE `barang` ADD `foto_barang` MEDIUMBLOB");

        //keranjang --fix
        Schema::table('keranjang', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barang')->onUpdate('cascade')->onDelete('cascade');
        });

        //transaksi --fix
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('id_keranjang')->references('id')->on('keranjang')->onUpdate('cascade')->onDelete('cascade');
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
