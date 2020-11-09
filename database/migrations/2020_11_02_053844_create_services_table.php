<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->string('header1');
            $table->text('details1');
            $table->string('header2');
            $table->text('details2');
            $table->string('header3');
            $table->text('details3');
            $table->string('header4');
            $table->text('details4');
            $table->string('header5');
            $table->text('details5');
            $table->text('bannerimage');
            $table->text('image');
            $table->text('free');
            $table->text('free1');
            $table->text('free2');
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
        Schema::dropIfExists('services');
    }
}
