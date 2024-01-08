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
        Schema::create('tbl_user', function (Blueprint $table) { 
            $table->uuid('id')->primary();
            $table->string('google_id')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->UnsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('tbl_status');
            $table->timestamps();
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
