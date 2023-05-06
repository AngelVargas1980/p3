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
        Schema::create('mercancias', function (Blueprint $table) {

            $table->string('codigo', 105);
            $table->string('nombre', 175);
            $table->unsignedBigInteger('id_tipo_mercancia')->unique();

            $table->foreign('id_tipo_mercancia')->references('id')->on('tipo_mercancias')->onDelete('no action');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mercancia');
    }
};
