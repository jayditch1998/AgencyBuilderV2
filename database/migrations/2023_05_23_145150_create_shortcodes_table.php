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
        Schema::create('shortcodes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('shortcode_category_id');
          $table->string('name')->unqiue();
          $table->string('shortcode');
          $table->string('business_column');
          $table->string('type');
          $table->tinyInteger('enabled')->default(1);
          $table->tinyInteger('required')->default(1);
          $table->tinyInteger('full')->default(1);
          $table->tinyInteger('display_on_wp')->default(1);
          $table->integer('position');
          $table->timestamps();

          $table->foreign('shortcode_category_id')->references('id')->on('shortcodes_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortcodes');
    }
};
