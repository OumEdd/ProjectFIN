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
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('cni_admin');
            $table->string('nom_admin');
            $table->string('prenom_admin');
            $table->string('email_admin');
            $table->string('password_admin');
            $table->timestamp('updated_at_admin')->useCurrent();
            $table->timestamp('created_at_admin')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
