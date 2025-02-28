<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCeritaTable extends Migration
{
    public function up()
    {
        Schema::create('cerita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->string('judul_cerita');
            $table->text('isi_cerita');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cerita');
    }
}
