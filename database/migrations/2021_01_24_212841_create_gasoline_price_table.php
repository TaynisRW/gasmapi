<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasolinePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasoline_prices', function (Blueprint $table) {
            // Create all fields for the table call gasoline_prices
            $table->longText('id');
            $table->longText('calle')->nullable();
            $table->longText('rfc');
            $table->longText('razonsocial')->nullable();
            $table->longText('date_insert')->nullable();
            $table->longText('numeropermiso')->nullable();
            $table->longText('fechaaplicacion')->nullable();
            $table->longText('permisoid')->nullable();
            $table->longText('longitude')->nullable();
            $table->longText('latitude')->nullable();
            $table->longText('codigopostal')->nullable();
            $table->longText('colonia')->nullable();
            $table->longText('municipio')->nullable();
            $table->longText('estado')->nullable();
            $table->decimal('regular', 4, 2)->nullable();
            $table->decimal('premium', 4, 2)->nullable();
            $table->decimal('dieasel', 4, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gasoline_prices');
    }
}
