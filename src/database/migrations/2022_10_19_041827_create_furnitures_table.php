<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furnitures', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255)->nullable();
            $table->longText('description');
            $table->enum('tension', ['110v', '220v']);
            $table->enum('brand', ['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG']);


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
        Schema::dropIfExists('furnitures');
    }
}
