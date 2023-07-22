<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenHalamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konten_halaman', function (Blueprint $table) {
            $table->id();
            $table->integer('id_halaman')->nullable();
            $table->string('judul')->nullable();
            $table->string('slug')->nullable();
            $table->text('isi')->nullable();
            $table->text('gambar')->nullable();
            $table->integer('pembuat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konten_halaman');
    }
}
