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
        Schema::create('penghunis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kode')->unique();
            $table->text('alamat');
            $table->integer('durasi');
            $table->integer('diskon');
            $table->integer('status');
            $table->string('hp');
            $table->date('tgl_registrasi');
            $table->foreignId('id_kamar');
            $table->string('ktp');
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
        Schema::dropIfExists('penghunis');
    }
};
