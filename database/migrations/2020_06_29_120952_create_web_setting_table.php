<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_setting', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('singkatan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('moto')->nullable();
            $table->string('email')->nullable();
            $table->string('telp_satu')->nullable();
            $table->string('telp_dua')->nullable();
            $table->text('logo')->nullable();
            $table->text('favicon')->nullable();
            $table->string('link_fb')->nullable();
            $table->string('link_ig')->nullable();
            $table->string('link_youtube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_setting');
    }
}
