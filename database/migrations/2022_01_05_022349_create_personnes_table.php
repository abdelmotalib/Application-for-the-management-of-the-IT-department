<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id()->primarykey();
            $table->string('firstname');
            $table->String('lastname');
            $table->String('mail');
            $table->String('adresse');
            $table->String('phone');
            $table->String('image')->nullable();
            $table->integer('personneable_id')->nullable();
            $table->string('personneable_type')->nullable();
            //$table->String('age');
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
        Schema::dropIfExists('personnes');
    }
}