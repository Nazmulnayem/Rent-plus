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
            $table->string('RenterUsername',100);
            $table->string('Housename',200);
            $table->string('phonenumber',50);
            $table->string('availablefrom',50);
            $table->string('availablefloor',50);
            $table->string('type_rent',100);
            $table->string('budget_rent',100);
            $table->string('Divisionselect',200);
            $table->string('Cityselect',200);
            $table->string('Areaselect',200);
            $table->text('full_address');
            $table->text('About_rent');
            $table->string('image_name',100);

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
