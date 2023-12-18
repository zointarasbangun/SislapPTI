<?php

use App\Models\Kendaraan;
use App\Models\Perjalanan;
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
            // $table->foreignId('user_id')->constrained();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('tgl_perjalanan');
            $table->string('alamat_awal');
            $table->string('alamat_tujuan');
            $table->integer('km_awal');
            $table->integer('km_akhir')->nullable();
            $table->foreignId('tipe_kendaraan_id')->constrained('kendaraans');
            $table->string('tipe_kendaraan');
            $table->string('no_polisi');
            $table->string('jenis_perjalanan');
            $table->string('lampu_depan')->nullable();
            $table->string('lampusen_depan')->nullable();
            $table->string('lampusen_belakang')->nullable();
            $table->string('lampu_rem')->nullable();
            $table->string('lampu_mundur')->nullable();
            $table->string('body')->nullable();
            $table->string('ban')->nullable();
            $table->string('klakson')->nullable();
            $table->string('pedal_gas')->nullable();
            $table->string('pedal_kopling')->nullable();
            $table->string('pedal_rem')->nullable();
            $table->string('weaper')->nullable();
            $table->string('air_weaper')->nullable();
            $table->string('air_radiator')->nullable();
            $table->string('oli_mesin')->nullable();
            $table->string('photo_km_awal')->nullable();
            $table->string('photo_km_akhir')->nullable();
            $table->string('catatan')->nullable();
            $table->string('status_perjalanan')->default(Perjalanan::STATUS_MENUNGGU);
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
