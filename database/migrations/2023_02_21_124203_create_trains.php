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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda');
            $table->string('Stazione_di_Partenza');
            $table->string('Stazione_di_Arrivo');
            $table->string('Orario_di_Partenza');
            $table->string('Orario_di_Arrivo');
            $table->smallInteger('Codice_Treno');
            $table->smallInteger('Numero_Carrozze');
            $table->boolean('In_Orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
