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
        Schema::create('makearent', function (Blueprint $table) {
            $table->id();
            $table->string('rent')->required();
            $table->string('brand')->required();
            $table->string('model')->required();
            $table->string('year')->required();
            $table->string('fuel')->required();
            $table->string('transmission')->required();
            $table->string('kmsdriven')->required();
            $table->string('ownernum')->required();
            $table->string('district')->required();
            $table->string('city')->required();
            $table->string('title')->required();
            $table->string('discription')->required();
            $table->string('rentday')->required();
            $table->string('rentmonth')->nullable();

            $table->string('photo1', 300)->required();
            $table->string('photo2', 300)->required();
            $table->string('photo3', 300)->required();
            $table->string('photo4', 300)->nullable();
            $table->string('photo5', 300)->nullable();
            $table->string('photo6', 300)->nullable();
            $table->string('photo7', 300)->nullable();
            $table->string('photo8', 300)->nullable();

            $table->string('ownername')->required();
            $table->string('ownerphone')->required();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makearent');
    }
};
