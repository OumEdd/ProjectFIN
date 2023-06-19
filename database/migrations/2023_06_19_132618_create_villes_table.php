<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Session;
return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //  public function ViewVilles(){

    //        $data=DB::table
    //  }



    public function up(): void
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->increments('id_ville');
            $table->string('nom_ville');
            $table->timestamp('updated_at_ville')->useCurrent();
            $table->timestamp('created_at_ville')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villes');
    }
};
