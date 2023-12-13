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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 30);
            $table->string('Stazione_di_partenza',20);
            $table->string('Stazione_di_arrivo',20);
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->string('Codice_treno')->unique();
            $table->unsignedTinyInteger('Numero_Carrozze');
            $table->string('Posto_numero');
            $table->string('In_Orario')->nullable();
            $table->string('Cancellato')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
