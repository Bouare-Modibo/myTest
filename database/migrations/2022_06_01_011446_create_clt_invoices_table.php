<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCltInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clt_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_number');
            $table->string('client_invoicepath');
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
        Schema::dropIfExists('clt_invoices');
    }
}
