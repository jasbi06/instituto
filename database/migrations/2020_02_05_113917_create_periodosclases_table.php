<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosclasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodosclases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('periodo_id')->unsigned();
            $table->bigInteger('materiaimpartida_id')->unsigned();
            $table->bigInteger('aula_id')->unsigned();
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
        Schema::dropIfExists('periodosclases');
    }
}
