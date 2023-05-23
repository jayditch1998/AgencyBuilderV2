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
        Schema::create('shortcodes_category', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name')->unqiue();
          $table->text('description')->nullable();
          $table->integer('position');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortcodes_category');
    }
};
