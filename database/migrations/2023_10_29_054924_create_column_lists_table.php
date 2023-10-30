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
        Schema::create('column_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_achievement_id')->constrained()->cascadeOnDelete();
            $table->string('order');
            $table->string('column_a')->nullable();
            $table->string('column_b')->nullable();
            $table->string('column_c')->nullable();
            $table->string('column_d')->nullable();
            $table->string('column_e')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('column_lists');
    }
};
