<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increment('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('street_address');
            $table->string('surburb');
            $table->string('citytown');
            $table->string('zip_postal_code');
            $table->string('state_province_region');
            $table->string('email')->unique();
            $table->string('contact_no');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('employee_type')->nullable();
            $table->integer('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('transaction_id')->nullable();
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->integer('service_type_id')->nullable();
            $table->foreign('service_type_id')->references('id')->on('servicetypes')->onDelete('cascade');
            $table->integer('product_type_id')->nullable();
            $table->foreign('product_type_id')->references('id')->on('producttypes')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
