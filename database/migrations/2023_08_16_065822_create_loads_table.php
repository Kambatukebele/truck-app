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
            $table->string('required_trailer');
            $table->string('cargo_weight');
            $table->string('additional_stops')->nullable();
            $table->string('type_of_load');
            $table->string('commodity');
            $table->string('rate');
            $table->string('dimensions');
            $table->string('hazmat')->default(false);
            $table->string('oversize')->default(false);
            $table->string('military_load')->default(false);
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