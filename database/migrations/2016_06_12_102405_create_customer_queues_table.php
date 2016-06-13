<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_queues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customers_id')->unsigned()->nullable();
            $table->integer('customer_types_id')->unsigned()->nullable();
            $table->integer('service_types_id')->unsigned()->nullable();
            $table->dateTime('queued_at');
            $table->enum('active', [0, 1])->default(1);
            $table->timestamps();

            //Integrity Constraints
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('customer_types_id')->references('id')->on('customer_types');
            $table->foreign('service_types_id')->references('id')->on('service_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_queues');
    }
}
