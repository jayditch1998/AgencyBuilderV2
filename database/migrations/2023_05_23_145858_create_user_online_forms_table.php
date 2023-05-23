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
        Schema::create('user_online_forms', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('website_id');
          $table->string('user_email');
          $table->string('licensed_key');
          $table->timestamps();

          $table->foreign('website_id')->references('id')->on('websites');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_online_forms');
    }
};
