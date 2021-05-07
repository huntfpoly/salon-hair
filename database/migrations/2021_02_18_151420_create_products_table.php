<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('regular_price');
            $table->bigInteger('sale_price')->nullable();
            $table->string('feature_img')->nullable();
//            $table->string('feature_img_name')->nullable();
            $table->text('short_description');
            $table->text('detail_description');
            $table->boolean('featured')->default(false);
            $table->integer('count_view')->default(0);
            $table->bigInteger('category_id')->unsigned();
//            $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('products');
    }
}
