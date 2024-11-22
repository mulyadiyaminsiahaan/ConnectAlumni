<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('judul_utama'); // Diambil dari tabel testimoni
            $table->string('nama'); // Nama pelapor
            $table->text('alasan'); // Alasan pelapor
            $table->timestamp('waktu')->default(DB::raw('CURRENT_TIMESTAMP')); // Waktu pelaporan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
