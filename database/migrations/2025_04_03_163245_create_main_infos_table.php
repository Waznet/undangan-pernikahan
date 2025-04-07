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
        Schema::create('main_infos', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('tujuan');
            $table->string('foto_pria');
            $table->string('nama_pria');
            $table->string('ortu_pria');
            $table->string('foto_wanita');
            $table->string('nama_wanita');
            $table->string('ortu_wanita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_infos');
    }
};
