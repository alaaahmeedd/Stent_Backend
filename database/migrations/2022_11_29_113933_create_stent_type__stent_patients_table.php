<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStentTypeStentPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stent_type__stent_patients', function (Blueprint $table) {
            $table->id();
            $table->integer('stentType_id')->unsigned();
            $table->integer('stentPatient_id')->unsigned();
            $table->foreign('stentType_id')->references('id')->on('stent_types')->onDelete('cascade');
            $table->foreign('stentPatient_id')->references('id')->on('stent_patients')->onDelete('cascade');
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
        Schema::dropIfExists('stent_type__stent_patients');
    }
}
