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
        Schema::create('vihicle_has_model_branchs', function (Blueprint $table) {
            $table->integer('vihicle_id')->nullable(false);
            $table->integer('modal_branch_id')->nullable(false);

            $table->foreign('vihicle_id')->references('id')->on('vehicles');
            $table->foreign('modal_branch_id')->references('id')->on('model_has_brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vihicle_has_model_branchs');
    }
};
