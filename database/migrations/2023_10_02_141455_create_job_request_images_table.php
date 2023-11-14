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
        Schema::create('job_request_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_request_id');
            $table->string('image_path');
            $table->timestamps();

            $table->foreign('job_request_id')->references('id')->on('job_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_request_images');
    }
};
