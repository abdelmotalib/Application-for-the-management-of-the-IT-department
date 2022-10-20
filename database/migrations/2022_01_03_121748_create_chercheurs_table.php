<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChercheursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chercheurs', function (Blueprint $table) {
            $table->id();
            $table->String('rolec');
            $table->String('article');
            $table->String('domaine');
            $table->String('vacataire');
            $table->integer('chercheurable_id')->nullable();
            $table->string('chercheurable_type')->nullable();
            $table->foreignid('user_id')->index()->unsigned()->nullable();
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
        Schema::dropIfExists('chercheurs');
    }
}