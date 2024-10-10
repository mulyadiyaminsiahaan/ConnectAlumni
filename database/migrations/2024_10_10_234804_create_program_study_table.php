<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('program_study', function (Blueprint $table) {
            $table->id();
            //tambahkan tabel program_study yaitu program_name, PS_ID, Degree_Level
            $table->string('program_name');
            $table->string('PS_ID');
            $table->string('Degree_Level');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_study');
    }
};
