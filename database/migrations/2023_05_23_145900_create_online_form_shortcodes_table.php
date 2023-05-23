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
        Schema::create('online_form_shortcodes', function (Blueprint $table) {
          $table->foreignId('user_online_form_id')->references('id')->on('user_online_forms');
          $table->foreignId('short_code_id')->references('id')->on('shortcodes');
          $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_form_shortcodes');
    }
};
