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
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->string('pickup_time');
            $table->string('drop_off_time');
            $table->string('pickup_date');
            $table->string('drop_off_date');
            $table->string('status')->default('draft');
            $table->string('pickup_company_name');
            $table->string('pickup_company_address');
            $table->string('pickup_company_address2')->nullable();
            $table->string('pickup_company_city');
            $table->string('pickup_company_state');
            $table->string('pickup_company_zipcode');
            $table->string('pickup_company_phone');
            $table->string('drop_off_company_name');
            $table->string('drop_off_company_address');
            $table->string('drop_off_company_address2')->nullable();
            $table->string('drop_off_company_city');
            $table->string('drop_off_company_state');
            $table->string('drop_off_company_zipcode');
            $table->string('drop_off_company_phone');
            $table->string('required_trailer_type');
            $table->string('cargo_weight');
            $table->string('additional_stops')->nullable();
            $table->string('type_of_load');
            $table->string('commodity')->nullable();
            $table->string('rate');
            $table->string('dimensions')->nullable();
            $table->boolean('hazmat');
            $table->boolean('oversize');
            $table->boolean('military_load');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loads');
    }
};