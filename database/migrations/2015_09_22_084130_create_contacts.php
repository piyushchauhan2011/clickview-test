<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('contacts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fullName');
          $table->string('email');
          $table->enum('role', ['Teacher', 'Head of Department', 'Principal', 'Student', 'Librarian', 'ICT', 'Other']);
          $table->string('schoolName');
          $table->text('message');
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
        //
        Schema::drop('contacts');
    }
}
