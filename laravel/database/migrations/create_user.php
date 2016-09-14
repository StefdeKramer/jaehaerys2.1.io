<?php


class CreateUserTable extends \Illuminate\Database\Migrations\Migration{
    /** run the migrations
     *
     @return void
     */


    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     *
     */

public function down()
{
Schema::drop('users');
}}
