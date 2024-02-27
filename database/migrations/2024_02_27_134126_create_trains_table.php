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
            // Orario di partenza -> varchar(64) NOT NULL
            $table->smallInteger('time_departures');
            // Orario di arrivo -> smallint NULL UNSIGNED
            $table->smallInteger('time_arrivals');
            // Codice treno -> smallint NULL UNSIGNED
            $table->smallInteger('train_num')->nullable()->unsigned();
            // Numero Carrozze -> smallint NULL UNSIGNED
            $table->smallInteger('num_train_carriagies')->nullable()->unsigned();
            // In orario -> smallint NULL UNSIGNED
            $table->smallInteger('on_time')->nullable()->unsigned();
            // Cancellato -> smallint NULL UNSIGNED
            $table->smallInteger('cancelled')->nullable()->unsigned();

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
