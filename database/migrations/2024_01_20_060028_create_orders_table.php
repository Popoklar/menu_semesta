<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->bigInteger('user_id')->unsigned();
            $table->decimal('subtotal', $precision = 15, $scale = 0);
            $table->decimal('total', $precision = 15, $scale = 0);
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->string('no_telp');
            $table->string('email');
            $table->enum('status', ['memesan', 'dibatalkan', 'selesai'])->default('memesan');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
