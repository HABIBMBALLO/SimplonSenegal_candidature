<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titreformation');
            $table->longText('description');
            $table->string('cible');
            $table->string('duree');
            $table->string('typeformation');
            // $table->unsignedBigInteger('appelcandidature_id');
            // $table->foreign('appelcandidature_id')->references('id')->on('appel_candidatures');

            // $table->foreignId('appel_candidature_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
};
