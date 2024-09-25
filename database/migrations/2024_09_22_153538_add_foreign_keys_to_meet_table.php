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
        Schema::table('meet', function (Blueprint $table) {
            $table->foreign('alumni_id', 'fk_meet_to_alumni')->references('id')->on('alumni')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'fk_meet_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meet', function (Blueprint $table) {
            $table->dropForeign('fk_meet_to_alumni');
            $table->dropForeign('fk_meet_to_users');
        });
    }
};
