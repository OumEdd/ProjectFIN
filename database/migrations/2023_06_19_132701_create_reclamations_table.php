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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->increments('id_rec');
            $table->string('ville_rec');
            $table->string('service_rec');
            $table->string('message_rec');
            $table->string('type_rec');
            $table->integer('valid_rec')->default(0);
            $table->timestamp('updated_at_rec')->useCurrent();
            $table->timestamp('created_at_rec')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
