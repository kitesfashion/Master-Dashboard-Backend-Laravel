<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAppoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_appoinments', function (Blueprint $table) {
            $table->id();
            $table->string('doctor');
            $table->string('patient');
            $table->string('phone');
            $table->string('age');
            $table->string('date');
            $table->string('time');
            $table->string('free');
            $table->string('free2');
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
        Schema::dropIfExists('doctor_appoinments');
    }
}
