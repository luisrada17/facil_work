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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_request_id');
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->time('time');
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('job_request_id')->references('id')->on('job_requests');
            $table->foreign('user_id')->references('id')->on('users');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
