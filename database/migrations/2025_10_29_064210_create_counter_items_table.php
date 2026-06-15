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
        Schema::create('counter_items', function (Blueprint $table) {
            $table->id();
            $table->text('item1_number')->nullable();
            $table->text('item1_title')->nullable();
            $table->text('item1_content')->nullable();
            $table->text('item2_number')->nullable();
            $table->text('item2_title')->nullable();
            $table->text('item2_content')->nullable();
            $table->text('item3_number')->nullable();
            $table->text('item3_title')->nullable();
            $table->text('item3_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counter_items');
    }
};
