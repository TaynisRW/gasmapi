<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodeMxTable extends Migration
{
    public function up()
    {
        Schema::create('zip_codes_mx', function (Blueprint $table) {
            // Create all fields for the table call zip_codes_mx
            $table->longText('d_codigo')->nullable();
            $table->longText('d_asenta')->nullable();
            $table->longText('d_tipo_asenta')->nullable();
            $table->longText('d_mnpio')->nullable();
            $table->longText('d_estado')->nullable();
            $table->longText('d_ciudad')->nullable();
            $table->longText('d_cp')->nullable();
            $table->longText('c_estado')->nullable();
            $table->longText('c_oficina')->nullable();
            $table->longText('c_tipo_asenta')->nullable();
            $table->longText('c_mnpio')->nullable();
            $table->longText('id_asenta_cpcons')->nullable();
            $table->longText('d_zona')->nullable();
            $table->longText('c_cve_ciudad')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zip_codes_mx');
    }
}
