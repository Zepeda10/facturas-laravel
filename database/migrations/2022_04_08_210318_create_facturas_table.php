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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->float('subtotal');
            $table->float('impuesto');
            $table->float('total');
            $table->unsignedBigInteger('user_id')->nullable(); //Creando llave foránea
            $table->unsignedBigInteger('producto_id')->nullable(); //Creando llave foránea
            $table->timestamps();

            $table->foreign('user_id') //Indicando llave foránea
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->foreign('producto_id') //Indicando llave foránea
                    ->references('id')->on('productos')
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
        Schema::dropIfExists('facturas');
    }
};
