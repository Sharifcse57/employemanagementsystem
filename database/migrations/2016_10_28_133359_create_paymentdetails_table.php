<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paymenthistory_id')->unsigned();
            $table->foreign('paymenthistory_id')->references('id')->on('paymenthistorys');
            $table->integer('payitem_id')->unsigned();
            $table->foreign('payitem_id')->references('id')->on('payitems');
            $table->string('amount');
            $table->integer('subtruction');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymentdetails');
    }
}
