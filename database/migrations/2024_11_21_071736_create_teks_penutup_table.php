<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teks_penutup', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->string('salam');
            $table->string('teks');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teks_penutup');
    }
};
