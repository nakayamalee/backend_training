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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longtext('img_path')->nullable()->comment('商品圖片');
            $table->string('product_name')->nullable()->comment('商品名稱');
            $table->integer('product_price')->nullable()->comment('商品價格');
            $table->string('product_detail')->nullable()->comment('商品描述');
            $table->integer('product_qty')->nullable()->comment('商品數量');
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
};
