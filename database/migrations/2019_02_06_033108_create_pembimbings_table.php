<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembimbingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbings', function (Blueprint $table) {
            $table->increments('pbid');
            $table->string('pbnam');
            $table->bigInteger('pbnip')->unique();
            $table->string('pbtemla');
            $table->date('pbtangla');
            $table->string('pbmatkul');
            $table->enum('pbjk',['perempuan','laki-laki']);          
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
        Schema::dropIfExists('pembimbings');
    }
}
