<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMempelaiTable extends Migration
{
    public function up()
    {
        Schema::create('mempelai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->string('nama_pria');
            $table->string('panggilan_pria');
            $table->string('nama_wanita');
            $table->string('panggilan_wanita');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mempelai');
    }
}
