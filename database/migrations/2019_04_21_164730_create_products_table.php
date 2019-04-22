<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("description");
            $table->unsignedInteger("product_category_id");
            $table->string("unit")->nullable();
            $table->unsignedInteger("quantity");
            $table->integer('reorder_point')->nullable();
            $table->unsignedInteger("order_level")->nullable();
            $table->decimal("unit_price", 8, 2);
            $table->unsignedInteger("location_id");
            $table->integer("status")->default('1');    //defaults to available
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("product_category_id")->references("id")->on("product_categories");
            $table->foreign("location_id")->references("id")->on("product_locations");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
