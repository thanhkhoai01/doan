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
            $table->string('Name');
            $table->string('Avatar');
            $table->string('Description');
            $table->double('SalePrice');
            $table->integer('Weight');
            $table->integer('StockQuantity');
            $table->unsignedBigInteger('CategoryId');
            $table->boolean('Status')->default(true);

            $table->timestamps();
            $table->foreign('CategoryId')->references('id')->on('categories')->onDelete('cascade');
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
