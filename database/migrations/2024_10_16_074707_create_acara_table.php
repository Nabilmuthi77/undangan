<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaraTable extends Migration
{
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->string('nama_acara');
            $table->date('tanggal_acara');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('zona_waktu');
            $table->string('nama_tempat');
            $table->string('alamat_tempat');
            $table->string('link_google_maps');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acara');
    }
}
