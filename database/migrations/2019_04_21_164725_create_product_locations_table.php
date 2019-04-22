<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("shelf_id");
            $table->unsignedInteger("level_id");
            $table->unsignedInteger("compartment_id");
            $table->integer("status")->default(0);  //free by default
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("shelf_id")->references("id")->on("shelves");
            $table->foreign("level_id")->references("id")->on("levels");
            $table->foreign("compartment_id")->references("id")->on("compartments");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_locations');
    }
}
