<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increment('id');
            $table->string('price')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('service_type')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->integer('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->integer('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
