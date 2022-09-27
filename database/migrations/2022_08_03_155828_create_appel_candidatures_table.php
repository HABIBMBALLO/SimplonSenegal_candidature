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
        Schema::create('appel_candidatures', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->LongText('description');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->foreignId('formation_id')->constrained();
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
        Schema::dropIfExists('appel_candidatures');
    }
};
