<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerSellerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_seller_models', function (Blueprint $table) {
            $table->id();
            $table->string('seller',255)->nullable();
            $table->decimal('seller_phone',22)->nullable();
            $table->string('buyer', 255)->nullable();
            $table->decimal('buyer_phone',22)->nullable();
            $table->string('quantity', 255)->nullable();
            $table->decimal('price', 22)->nullable()->default(0.00);
            $table->decimal('total', 22)->nullable()->default(0.00);
            $table->string('description', 500)->nullable();
            $table->string('token', 64)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyer_seller_models');
    }
}
