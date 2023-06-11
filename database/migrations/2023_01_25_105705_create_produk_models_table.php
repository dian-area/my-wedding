<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_layanan', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->string('judul_produk', 50)->nullable()->default('NULL');
            $table->string('deskripsi_singkat_produk', 50)->nullable()->default('NULL');
            $table->text('deskripsi_lengkap_produk')->nullable()->default('NULL');
            $table->date('tanggal_produk');
            $table->string('gambar_produk', 50)->nullable()->default('NULL');
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
        Schema::dropIfExists('produk_models');
    }
}
