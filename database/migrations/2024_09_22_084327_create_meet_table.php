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
        Schema::create('meet', function (Blueprint $table) {
            $table->id();
            $table->integer('alumni_id');
            $table->integer('user_id');
            $table->enum('lever', [1, 2, 3]);
            #create table date
            $table->date('date')->nullable();
            #create table time
            $table->time('time')->nullable();
            $table->enum('status', [1, 2]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meet');
    }
};
