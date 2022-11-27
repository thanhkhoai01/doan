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
        Schema::create('import_requests', function (Blueprint $table) {
            $table->id();
            $table->dateTime('ImportDate');
            $table->text('Note');
            $table->unsignedBigInteger('SupplierId');
            $table->unsignedBigInteger('EmployeeId');

            $table->timestamps();
            $table->foreign('SupplierId')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('EmployeeId')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_requests');
    }
};
