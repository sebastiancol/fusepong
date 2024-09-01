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
        Schema::create('user_models', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('document')->default();
            $table->string('first_name')->default();
            $table->string('last_name')->default();
            $table->string('address')->default();
            $table->integer('phone')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_models');
    }
};
