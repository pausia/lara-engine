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
        Schema::create('pelapor', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('status', ['diajukan','diterima','ditolak','minta_bukti']);
            $table->string('lokasi_kejadian');
            $table->string('terlapor');
            $table->dateTime('waktu_kejadian');
            $table->text('bukti_foto');
            $table->text('detail_kejadian');
            $table->string('jenis_pengrusakan');
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
        Schema::dropIfExists('pelapor');
    }
};
