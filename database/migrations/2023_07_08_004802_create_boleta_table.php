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
        Schema::create('boleta', function (Blueprint $table) {
            $table->id();
            $table->integer('Ruc',12);
            $table->string('NombreProducto',50);
            $table->string('PlanAdquirido',100);
            $table->string('NombreCliente',50);
            $table->date('FechaEmision');
            $table->string('Domicilio',120);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_boleta');
    }
};
