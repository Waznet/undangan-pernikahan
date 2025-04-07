<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_infos', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('deskripsi');
            $table->string('lokasi');
            $table->string('kota');
            $table->string('alamat');
            $table->string('link_map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_infos');
    }
};
