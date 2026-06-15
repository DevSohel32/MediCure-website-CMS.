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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('department_date')->nullable();
            $table->text('client')->nullable();
            $table->text('location')->nullable();
            $table->text('website')->nullable();
            $table->text('phone')->nullable();
            $table->text('quote_person')->nullable();
            $table->text('quote_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
