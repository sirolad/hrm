<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstName', 30);
            $table->string('otherName', 30)->nullable();
            $table->string('surname', 30);
            $table->date('birthDate');
            $table->string('email')->unique();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->string('password');
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->string('image')->nullable();
            $table->enum('maritalStatus', ['married', 'single', 'divorced', 'widowed'])->nullable();
            $table->integer('role')->unsigned()->nullable();
            $table->date('hireDate')->nullable();
            $table->bigInteger('phone')->unique()->index()->nullable();
            $table->string('country')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('role')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role']);
        });

        Schema::dropIfExists('users');
    }
}
