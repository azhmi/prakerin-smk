<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('nilid');
            $table->integer('nilmagid');
            $table->integer('nil1');
            $table->integer('nil2');
            $table->integer('nil3');
            $table->integer('nil4');
            $table->integer('nil5');
            $table->integer('nil6');
            $table->integer('nil7');
            $table->integer('nil8');
            $table->integer('nil9');            
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
        Schema::dropIfExists('nilais');
    }
}
