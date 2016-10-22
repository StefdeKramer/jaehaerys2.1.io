<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /**
     * Id Exercise
     * Id User
     * Title
     * Description
     * Musclegroups
     */

    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('title');
            $table->text('body');
            $table->text('musclegroups');
            $table->boolean('active')->default(true);
            $table->integer('user_id');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
