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
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nasabah_id');
            $table->foreign('nasabah_id')->references('id')->on('nasabah')->onDelete('cascade');
            $table->double('jumlah_pinjaman');
            $table->bigInteger('jumlah_cicilan');
            $table->bigInteger('rentang_waktu_pinjaman');
            $table->double('bunga_pinjaman');
            $table->date('tanggal_pinjaman');
            $table->date('tanggal_pembayaran_cicilan');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman');
    }
};
