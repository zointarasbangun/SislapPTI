<?php

use App\Models\Kendaraan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_perjalanan');
            $table->string('alamat_awal');
            $table->string('alamat_tujuan');
            $table->integer('km_awal');
            $table->integer('km_akhir');
            $table->foreignIdFor(Kendaraan::class);
            $table->string('tipe_kendaraan');
            $table->string('no_polisi');
            $table->string('jenis_perjalanan');
            $table->string('lampu_depan');
            $table->string('lampusen_depan');
            $table->string('lampusen_belakang');
            $table->string('lampu_rem');
            $table->string('lampu_mundur');
            $table->string('body');
            $table->string('ban');
            $table->string('klakson');
            $table->string('pedal_gas');
            $table->string('pedal_kopling');
            $table->string('pedal_rem');
            $table->string('weaper');
            $table->string('air_weaper');
            $table->string('air_radiator');
            $table->string('oli_mesin');
            $table->string('photo_km_awal')->nullable();
            $table->string('photo_km_akhir')->nullable();
            $table->string('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
