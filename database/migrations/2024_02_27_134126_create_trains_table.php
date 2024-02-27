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
            // id -> unsigned big integer + AUTO_INCREMENT + PRIMARY KEY
            $table->id();

            // Azienda -> varchar(64) NOT NULL
            $table->string('company', 64);

            // Stazione di partenza -> varchar(64) NOT NULL
            $table->string('station_departures', 64);

            // Stazione di arrivo -> varchar(64) NOT NULL 
            $table->string('station_arrivals', 64);

            // Orario di partenza -> time NOT NULL UNSIGNED
            $table->time('time_departures', $precision = 0);

            // Orario di arrivo -> time NOT NULL UNSIGNED
            $table->time('time_arrivals', $precision = 0);

            // Codice treno -> tinyint NOT NULL UNSIGNED
            $table->strign('train_num')->unsigned();

            // Numero Carrozze -> tinyint NULL UNSIGNED
            $table->integer('num_train_carriagies')->unsigned();

            // In orario -> boolean NOT NULL 
            $table->boolean('on_time');

            // Cancellato -> boolean NOT NULL 
            $table->boolean('cancelled');

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
