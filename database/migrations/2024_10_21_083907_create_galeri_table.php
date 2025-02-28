<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->string('foto_sampul')->nullable();
            $table->string('foto_pembuka')->nullable();
            $table->string('foto_acara')->nullable();
            $table->string('foto_cerita')->nullable();
            $table->json('foto_galeri')->nullable();
            $table->string('video_galeri')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
