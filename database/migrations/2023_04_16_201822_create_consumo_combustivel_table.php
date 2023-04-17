<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumoCombustivelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->decimal('capacidade',8,2);
            $table->string('portador');
            $table->decimal('quantia',8,2);
            $table->decimal('qnt_gasta',8,2)->nullable();
            $table->decimal('qnt_abast1',8,2)->nullable();
            $table->decimal('saldo_tanque',8,2)->nullable();
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
        Schema::dropIfExists('consumo_combustivel');
    }
}
