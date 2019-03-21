<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trainingName',100);
            $table->string('trainerName',100);
            $table->text('shortDescription');
            $table->tinyInteger('skills');
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
        Schema::dropIfExists('traings');
    }
}
