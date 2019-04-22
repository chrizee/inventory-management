<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("product_id");
            $table->integer("quantity")->default(1);
            $table->unsignedInteger("requested_by")->nullable();
            $table->unsignedInteger("approved_by")->nullable();
            $table->unsignedInteger("collected_by")->nullable();
            $table->integer('status')->default(1);  //pending approval
            $table->mediumText("comment")->nullable();
            $table->timestamp("requested_on")->useCurrent();
            $table->timestamp("approved_on")->nullable();
            $table->timestamp("collected_on")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("product_id")->references('id')->on('products');
            $table->foreign("requested_by")->references('id')->on('users');
            $table->foreign("approved_by")->references('id')->on('users');
            $table->foreign("collected_by")->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
