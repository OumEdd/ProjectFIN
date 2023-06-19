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
        Schema::create('complaint_respos', function (Blueprint $table) {
            $table->increments('compl_respo');
            $table->unsignedInteger('id_rec');
            $table->unsignedInteger('id_respo');
            $table->foreign('id_respo')->references('id_respo')->on('responsables')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_rec')->references('id_rec')->on('reclamations')->onUpdate('cascade')->onDelete('cascade');
            $table->string('message_compl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaint_respos');
    }
};
