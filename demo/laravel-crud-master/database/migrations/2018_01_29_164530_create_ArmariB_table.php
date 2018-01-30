<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmariBTable extends Migration
{
    public $timestamps =false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArmariB', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('nom_armari');
            $table->string('nom_producte');
            $table->integer('stock_inicial');
            $table->integer('stock_actual');
            $table->string('proveedor');
            $table->integer('referencia_proveedor');
            $table->string('marca_equip');
            $table->integer('num_lot');

            $table->foreign('users_id')
                ->references('users_id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ArmariB');
    }
}
