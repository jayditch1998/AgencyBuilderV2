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
        Schema::create('websites', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('category_id');
          $table->string('name')->unique();
          $table->text('description')->nullable();
          $table->string('url');
          $table->tinyInteger('status')->default(1);
          $table->integer('business_credit')->default(1);
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
