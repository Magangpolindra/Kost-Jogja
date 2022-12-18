<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kost', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->unique();
            $table->foreignId('user_id');
            $table->foreignId('pemilik_id');
            $table->string('nama_kost');
            $table->text('alamat');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('harian');
            $table->integer('bulanan');
            $table->integer('tahunan');
            $table->integer('stok_kamar');
            $table->string('pembayaran');
            $table->string('kategori');
            $table->string('akses');
            $table->text('depskirpsi');
            $table->string('kontak');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kost');
    }
};
