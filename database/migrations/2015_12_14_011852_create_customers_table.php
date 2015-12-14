<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table){
            $table->increments('id');
            $table->string('owner');
            $table->string('address');
            $table->string('mobile');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('quote');
            $table->string('date_in');
            $table->string('date_out');
            $table->string('estimator');
            $table->string('rego');
            $table->string('dom');
            $table->string('make');
            $table->string('model');
            $table->string('series');
            $table->string('badge');
            $table->string('colour');
            $table->string('rr');
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
        Schema::drop('customers');
    }
}
