<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestappoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testappoinments', function (Blueprint $table) {
            $table->id();
            $table->string('bookingid');
            $table->string('testid');
            $table->string('patient');
            $table->string('phone');
            $table->string('age');
            $table->string('address');
            $table->string('date');
            $table->string('time');
            $table->string('report');
            $table->string('sample');
            $table->string('free');
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
        Schema::dropIfExists('testappoinments');
    }
}
