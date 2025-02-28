<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mempelai', function (Blueprint $table) {
            $table->string('ayah_pria')->nullable();
            $table->string('ibu_pria')->nullable();
            $table->string('anak_ke_pria')->nullable();
            $table->string('foto_pria')->nullable();
            $table->string('ayah_wanita')->nullable();
            $table->string('ibu_wanita')->nullable();
            $table->string('anak_ke_wanita')->nullable();
            $table->string('foto_wanita')->nullable();
            $table->string('instagram_link_pria')->nullable();
            $table->string('instagram_link_wanita')->nullable();
        });
    }

    public function down()
    {
        Schema::table('mempelai', function (Blueprint $table) {
            $table->dropColumn(['ayah_pria', 'ibu_pria', 'anak_ke_pria', 'foto_pria', 'ayah_wanita', 'ibu_wanita', 'anak_ke_wanita', 'foto_wanita', 'instagram_links_pria', 'instagram_links_wanita']);
        });
    }
};
