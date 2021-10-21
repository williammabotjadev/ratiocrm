<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increment('id');
            $table->string('name');
            $table->string('registration_no')->nullable();
            $table->text('street_address');
            $table->string('surburb');
            $table->string('citytown');
            $table->string('zip_postal_code');
            $table->string('state_province_region');
            $table->string('email_address');
            $table->string('contact_no');
            $table->string('additional_contact_no')->nullable();
            $table->string('website_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('contact_person_firstname')->nullable();
            $table->string('contact_person_lastname')->nullable();
            $table->string('contact_person_contact_no')->nullable();
            $table->string('contact_person_linkedin')->nullable();
            $table->string('industry')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_role');
            $table->string('company_id')->nullable();
            $table->foreign('id')->on('companies')->reference('id');
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
        Schema::dropIfExists('customers');
    }
}
