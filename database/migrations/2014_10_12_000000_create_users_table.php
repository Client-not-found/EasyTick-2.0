<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('useId');
            $table->string('useGorId');
            $table->string('useFirstname');
            $table->string('useLastname');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->string('country');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
