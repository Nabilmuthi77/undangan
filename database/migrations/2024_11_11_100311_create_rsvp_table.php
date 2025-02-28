<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRsvpTable extends Migration
{
    public function up()
    {
        Schema::create('rsvp', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('pesan');
            $table->enum('konfirmasi_kehadiran', [
                'Ya, Saya akan datang',
                'Maaf, Saya tidak bisa datang',
                'Saya belum tahu bisa datang atau tidak'
            ]);
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rsvp');
    }
}
