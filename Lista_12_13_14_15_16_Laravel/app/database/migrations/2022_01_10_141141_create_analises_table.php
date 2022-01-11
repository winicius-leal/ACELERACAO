<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("pgsql")->create('analises', function (Blueprint $table) {
            $table->id();
            $table->integer("id_doc");
            $table->integer("id_assinatura");
            $table->string("status");
            $table->dateTime("data_analise");
            $table->integer("visualizadores");
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
        Schema::connection("pgsql")->dropIfExists('analises');
    }
}
