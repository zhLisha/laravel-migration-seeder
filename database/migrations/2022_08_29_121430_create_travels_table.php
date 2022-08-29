<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

             // Destinazione
             $table->string('destination', 30);
             // Hotel
             $table->string('hotel', 50);
             // Servizi inclusi
             $table->text('services');
             // Partenza
             $table->date('departure_day');
             // Rientro
             $table->date('return_day');
             // Costo totale
             $table->decimal('price', 8, 2)->unsigned();

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
        Schema::dropIfExists('travels');
    }
}
