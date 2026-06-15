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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->text('subheading')->nullable();
            $table->text('heading')->nullable();
            $table->text('button1_text')->nullable();
            $table->text('button1_link')->nullable();
            $table->text('button2_text')->nullable();
            $table->text('button2_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
