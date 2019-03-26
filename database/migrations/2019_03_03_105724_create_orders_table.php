<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('status');
            $table->timestamps();
        });


        Schema::create('order_product', function(Blueprint $table) {
          $table->integer('order_id');
          $table->integer('product_id');
          $table->integer('quantity');
          $table->primary(['order_id' , 'product_id']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orders_products');
    }
}
