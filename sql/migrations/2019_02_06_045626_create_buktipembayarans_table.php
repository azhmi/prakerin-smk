<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktipembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buktipembayarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('berkas1');
            $table->string('berkas2');
            $table->string('berkas3');
            $table->string('berkas4');
            $table->string('berkas5');
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
        Schema::dropIfExists('buktipembayarans');
    }
}
