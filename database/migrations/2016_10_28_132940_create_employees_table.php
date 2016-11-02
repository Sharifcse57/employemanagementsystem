<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',100);
            $table->string('password',100);
            $table->string('fullname',100);
            $table->integer('designation_id')->unsigned();
            $table->foreign('designation_id')->references('id')->on('designations');
            $table->string('email',100);
            $table->integer('paygrade_id')->unsigned();
            $table->foreign('paygrade_id')->references('id')->on('paygrades');
            $table->date('joindate');
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
