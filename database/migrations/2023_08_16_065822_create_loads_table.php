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
            $table->string('pickup_address');
            $table->string('drop_off_address');
            $table->string('required_trailer');
            $table->string('cargo_weight');
            $table->string('additional_stops')->nullable();
            $table->string('type_of_load');
            $table->string('commodity');
            $table->string('rate');
            $table->string('dimensions');
            $table->boolean('hazmat')->default(0);
            $table->boolean('oversize')->default(0);
            $table->boolean('military_load')->default(0);
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