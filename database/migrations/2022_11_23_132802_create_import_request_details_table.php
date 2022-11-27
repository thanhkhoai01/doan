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
        Schema::create('import_request_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ImportRequestId');
            $table->unsignedBigInteger('ProductId');
            $table->integer('Quantity');
            $table->timestamps();
            $table->foreign('ImportRequestId')->references('id')->on('import_requests')->onDelete('cascade');
            $table->foreign('ProductId')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_request_details');
    }
};
