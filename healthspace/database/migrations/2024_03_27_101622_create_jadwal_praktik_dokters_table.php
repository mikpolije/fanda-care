<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_praktik_dokters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')->constrained();
            $table->string('hari_praktik');
            $table->string('jam_praktik_awal');
            $table->string('jam_praktik_akhir');

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
        Schema::dropIfExists('jadwal_praktik_dokters');
    }
};
