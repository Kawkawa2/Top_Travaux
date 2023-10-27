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
        Schema::enableForeignKeyConstraints();
        Schema::create('ville', function (Blueprint $table) {
            $table->id();
            $table->string('nom_ville');
            $table->string('code_postal');
            $table->string('slug');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ville');
    }
};
