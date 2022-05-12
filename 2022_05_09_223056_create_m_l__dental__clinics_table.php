<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMLDentalClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_l__dental__clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->Boolean('smoking');
            $table->String('Oral_Allergic');
            $table->String('Oral_Allergic');
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
        Schema::dropIfExists('m_l__dental__clinics');
    }
}
