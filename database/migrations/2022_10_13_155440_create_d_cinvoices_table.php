<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDCinvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_cinvoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('order_no')->nullable();
            $table->date('order_date')->nullable();
            $table->string('au')->nullable();
            $table->string('product')->nullable();
            $table->string('batch')->nullable();
            $table->string('mfg')->nullable();
            $table->date('mfgdate')->nullable();
            $table->date('expdate')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_cinvoices');
    }
}
