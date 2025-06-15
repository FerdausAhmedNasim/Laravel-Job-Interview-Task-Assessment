<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('main', function (Blueprint $table) {
            $table->id();
            $table->string('moduletitle');
            $table->enum('video_type', ['mp4', 'wav', 'avi', 'mov', 'mkv']);
            $table->string('video_url')->nullable();
            $table->string('video_length')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main');
    }
};
