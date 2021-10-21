<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('registration_no')->nullable();
            $table->text('street_address');
            $table->string('surburb');
            $table->string('citytown');
            $table->string('zip_postal_code');
            $table->string('state_province_region');
            $table->string('email')->unique();
            $table->string('contact_no');
            $table->string('additional_contact_no')->nullable();
            $table->string('website_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('contact_person_firstname')->nullable();
            $table->string('contact_person_lastname')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_person_contact_no')->nullable();
            $table->string('contact_person_linkedin')->nullable();
            $table->string('industry')->nullable();
            $table->string('business_type')->nullable();
            /*$table->integer('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('supplier_id')->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->integer('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->integer('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transaction')->onDelete('cascade');*/
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
        Schema::dropIfExists('companies');
    }
}
