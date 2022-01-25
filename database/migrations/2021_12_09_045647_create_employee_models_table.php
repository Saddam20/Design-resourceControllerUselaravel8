<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_models', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('email')->unique();
            $table->decimal('phone',22)->nullable();
            $table->string('description',255)->nullable();
            $table->longText('address')->nullable();
            $table->string('image',255)->nullable();
            $table->string('token', 64)->nullable();
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
        Schema::dropIfExists('employee_models');
    }
}
