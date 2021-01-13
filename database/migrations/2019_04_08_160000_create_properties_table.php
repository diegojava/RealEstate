<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('type');
            $table->double('amount');
            $table->string('currency')->default('MXN');
            $table->string('city');
            $table->string('postalCode');
            $table->string('province');
            $table->text('description');
            $table->string('images');
            $table->string('availability')->default('YES');
            $table->string('contactNo');
            $table->string('contatctEmail');
            $table->string('contractType')->default('Venta'); // Renta - Venta
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
        Schema::dropIfExists('properties');
    }
}
