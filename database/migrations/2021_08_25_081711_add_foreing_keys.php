<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** Tabla personas */
        Schema::table('personas', function ($table){
            $table->foreign('id_clasificacion')->references('id')->on('clasificacion_persona');
        });

        /** Tabla vehiculos */
        Schema::table('vehiculos', function ($table){
            $table->foreign('id_tipo_vehiculo')->references('id')->on('tipo_vehiculo');
            $table->foreign('id_conductor')->references('id')->on('personas');
            $table->foreign('id_propietario')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /** Tabla compras */
        Schema::table('personas', function ($table) {
            $table->dropForeign(['id_clasificacion']);
        });

        /** Tabla compras */
        Schema::table('vehiculos', function ($table) {
            $table->dropForeign(['id_tipo_vehiculo']);
            $table->dropForeign(['id_conductor']);
            $table->dropForeign(['id_propietario']);
        });
    }
}
