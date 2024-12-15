<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationsTable extends Migration
{
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hotel');
            $table->integer('harga');
            $table->integer('jumlah_kamar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('akomodasi');
    }
}

