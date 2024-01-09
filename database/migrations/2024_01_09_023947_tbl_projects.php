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
        Schema::create('tbl_projects', function (Blueprint $table) { 
            $table->uuid('id')->primary();
            $table->uuid('id_project_owner');
            $table->string('title');
            $table->UnsignedBigInteger('id_category');
            $table->integer('price');
            $table->string('difficulty');
            $table->string('description');
            $table->string('due');
            $table->string('meeting');
            $table->integer('applicants');
            $table->UnsignedBigInteger('id_status');
            $table->timestamps();

            $table->foreign('id_project_owner')->references('id')->on('tbl_user_profile');
            $table->foreign('id_category')->references('id')->on('tbl_project_categories');
            $table->foreign('id_status')->references('id')->on('tbl_status');            
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
