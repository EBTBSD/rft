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
        //applications
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->string('job_pos');
            $table->string('name');
            $table->string('sex');
            $table->string('email');
            $table->string('birthplace');
            $table->date('birthdate');
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
