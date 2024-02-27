<?php

// È LO SCHELETRO STRUTTURA DELLA NOSTRA TABELLA 

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
            // id -> unsigned big integer + AUTO_INCREMENT + PRIMARY KEY
            $table->id();

            // Azienda -> varchar(64) NOT NULL
            $table->string('company', 64);

            // Stazione di partenza -> varchar(64) NOT NULL
            $table->string('station_departures', 64);

            // Stazione di arrivo -> varchar(64) NOT NULL 
            $table->string('station_arrivals', 64);

            // Orario di partenza -> time NOT NULL UNSIGNED
            $table->dateTime('time_departures');

            // Orario di arrivo -> time NOT NULL UNSIGNED
            $table->dateTime('time_arrivals');

            // Codice treno -> string NOT NULL UNSIGNED
            $table->string('train_num', 100);

            // Numero Carrozze -> tinyint NULL UNSIGNED
            $table->tinyInteger('num_train_carriagies');

            // In orario -> boolean NOT NULL 
            $table->boolean('on_time')->default(true);

            // Cancellato -> boolean NOT NULL 
            $table->boolean('cancelled')->default(false);

            // Crea 2 colonne: created_at e updated_at
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
