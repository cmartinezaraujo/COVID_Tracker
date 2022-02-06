<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('contact_id');
            $table->unsignedBigInteger('requester_id');
            $table->unsignedBigInteger('addressee_id');
            $table->enum('status', ['pending', 'accepted']);
            $table->foreign('requester_id')->references('id')->on('users');
            $table->foreign('addressee_id')->references('id')->on('users');
            $table->timestamps();
        });
        /**
         * TODO: Decide how to handle the case when someone sends a contact request
         * to a person that has already sent them one.
         */
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
