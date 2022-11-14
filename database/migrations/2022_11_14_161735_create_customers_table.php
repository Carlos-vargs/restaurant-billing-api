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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_cliente', 32)->unique();
            $table->string('primer_nombre', 32);
            $table->string('segundo_nombre', 32)->nullable();
            $table->string('primer_apellido', 32);
            $table->string('segundo_apellido', 32)->nullable();
            $table->string('numero_telefono', 16)->unique();
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
        Schema::dropIfExists('customers');
    }
};
