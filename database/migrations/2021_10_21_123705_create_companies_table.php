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
        Schema::table('companies', function (Blueprint $table) {
            $table->increment('id');
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
            $table->string('customer_id')->nullable();
            $table->foreign('id')->on('customers')->reference('id');
            $table->string('employee_id')->nullable();
            $table->foreign('id')->on('employees')->reference('id');
            $table->string('user_id')->nullable();
            $table->foreign('id')->on('users')->reference('id');
            $table->string('supplier_id')->nullable();
            $table->foreign('id')->on('suppliers')->reference('id');
            $table->string('product_id')->nullable();
            $table->foreign('id')->on('products')->reference('id');
            $table->string('service_id')->nullable();
            $table->foreign('id')->on('services')->references('id');
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
