<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->bigInteger('user_id')->unsigned();
            $table->string('order_id', 36);
            $table->enum('transfer', ['Bank Mandiri', 'Dana', 'Shopeepay'])->default('Dana');
            $table->enum('status', ['menunggu', 'disetujui', 'ditolak', 'dibatalkan', 'dikembalikan'])->default('menunggu');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
