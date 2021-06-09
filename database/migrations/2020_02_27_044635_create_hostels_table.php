<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('hostel_name');
            $table->string('district');
            $table->string('city');
            $table->string('address',300);
            $table->integer('bedcapacity');
            $table->boolean('a/c');
            $table->boolean('food');
            $table->boolean('men');
            $table->boolean('woman');
            $table->boolean('wifi');
            $table->boolean('shelf');
            $table->boolean('parking');
            $table->boolean('kitchen');
            $table->boolean('laundry');
            $table->integer('fee');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostels');
    }
}
