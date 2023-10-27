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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('prenom')->nullable();
            $table->string('tel')->nullable();
            $table->string('nom_societe')->nullable();
            $table->string('tel2')->nullable();
            $table->string('Fix')->nullable();
            $table->string('seret')->nullable();
            $table->string('code_naf')->nullable();
            $table->string('libelle')->nullable();
            $table->tinyInteger('role_as')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('adress')->nullable();
            $table->string('logo')->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->string('facebook')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('description')->nullable();
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->string('temps_de_travail')->nullable();
            $table->string('codeP')->nullable();
            $table->string('ville')->nullable();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
