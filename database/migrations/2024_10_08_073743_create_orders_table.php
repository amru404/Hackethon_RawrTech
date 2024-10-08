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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_order');
            $table->foreignId('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
            $table->integer('qty');
            $table->decimal('total_harga', 15,2);
            $table->date('tanggal_ticket');
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran')->default('belum_bayar');//sudah_bayar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
