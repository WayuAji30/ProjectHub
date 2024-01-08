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
        Schema::create('tbl_user_profile', function (Blueprint $table) { 
            $table->uuid('id')->primary();
            $table->uuid('id_user_login');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->text('about_me')->nullable();
            $table->string('behance')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('dribble')->nullable();
            $table->string('cv')->nullable();
            $table->string('portfolio')->nullable();
            $table->timestamps();

            $table->foreign('id_user_login')->references('id')->on('tbl_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
