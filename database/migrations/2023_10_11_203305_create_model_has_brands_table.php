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
        Schema::create('model_has_brands', function (Blueprint $table) {
            $table->id();
            $table->integer('model_id')->nullable(false);
            $table->integer('brand_id')->unique()->nullable(false);

            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_has_brands');
    }
};
