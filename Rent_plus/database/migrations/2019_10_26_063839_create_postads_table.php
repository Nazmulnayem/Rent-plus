<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RenterUsername',20);
            $table->string('Housename',20);
            $table->string('phonenumber',12);
            $table->string('availablefloor',5);
            $table->string('type_rent',10);
            $table->string('budget_rent',10);
            $table->string('Divisionselect',20);
            $table->string('Cityselect',20);
            $table->string('Areaselect',20);
            $table->text('full_address');
            $table->text('About_rent');
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
        Schema::dropIfExists('postads');
    }
}
