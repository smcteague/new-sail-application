<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('street_address_1', 50)->nullable();
            $table->string('street_address_2', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('state_abbr', 50)->nullable();
            $table->string('postalcode', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('email_1', 50)->nullable();
            $table->string('email_2', 50)->nullable();
            $table->string('tel_1', 50)->nullable();
            $table->string('tel_1_type', 50)->nullable();
            $table->string('tel_2', 50)->nullable();
            $table->string('tel_2_type', 50)->nullable();
            $table->string('link_1', 50)->nullable();
            $table->string('link_1_type', 50)->nullable();
            $table->string('link_2', 50)->nullable();
            $table->string('link_2_type', 50)->nullable();
            $table->string('link_3', 50)->nullable();
            $table->string('link_3_type', 50)->nullable();
            $table->date('birthday')->nullable();
            $table->date('wedding_anniversary')->nullable();
            $table->date('passing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
