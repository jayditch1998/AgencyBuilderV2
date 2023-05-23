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
        Schema::create('users', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('role_id');
          $table->unsignedBigInteger('user_level_id');
          $table->string('last_name');
          $table->string('first_name');
          $table->string('middle_name')->nullable();
          $table->string('email')->unique();
          $table->string('mobile')->nullable();
          $table->string('license_key')->unqiue();
          $table->tinyInteger('status')->default(1);
          $table->string('password');
          $table->dateTime('expired_at')->nullable();
          $table->timestamps();

          $table->foreign('role_id')->references('id')->on('roles');
          $table->foreign('user_level_id')->references('id')->on('user_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
