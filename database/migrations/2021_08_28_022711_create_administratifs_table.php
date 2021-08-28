<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administratifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('daerah');
            $table->string('jumlah_rt');
            $table->string('jumlah_kk');
            $table->string('jumlah_jiwa');
            $table->string('laki_laki');
            $table->string('perempuan');
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
        Schema::dropIfExists('administratifs');
    }
}
