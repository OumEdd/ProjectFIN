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
        Schema::create('responsables', function (Blueprint $table) {
            $table->increments('id_respo');
            $table->string('cin_respo');
            $table->string('nom_respo');
            $table->string('prenom_respo');
            $table->string('adresse_respo');
            $table->string('email_respo');
            $table->string('tele_respo');
            $table->string('password_respo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsables');
    }
};
