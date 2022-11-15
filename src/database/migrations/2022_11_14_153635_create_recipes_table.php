<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string('image_name');
            $table->integer('prep_time');
            $table->integer('cook_time');
            $table->integer('eaters');
            $table->integer('type_id')->unique();
            $table->integer('user_id')->unique();
            $table->integer('location_id')->unique();
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
        Schema::dropIfExists('recipes');
    }
};
