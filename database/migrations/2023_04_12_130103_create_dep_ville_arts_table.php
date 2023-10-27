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
        Schema::create('dep_ville_art', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('ville');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departement');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dep_ville_art');
    }
};
