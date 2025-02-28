<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreamingTable extends Migration
{
    public function up()
    {
        Schema::create('streaming', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations')->onDelete('cascade');
            $table->string('link_streaming');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('streaming');
    }
}
