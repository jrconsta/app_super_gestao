<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // Criando a tabela filiais
        Schema::create('filiais', function(Blueprint $table){
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        // Criando a tabela auxiliair produto_filiais
        Schema::create('produto_filiais', function(Blueprint $table){
            $table->id();

            // Criando colunas na table produtos_filiais para receber as fk
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');

            // Criando colunas já existentes na table produtos
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');

            // fk
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->timestamps();
        });

        /*
        Schema::table('produtos', function(Blueprint $table){
            $table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
        });
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reverte a remoção da table produtos
        /*
        Schema::create('produtos', function(Blueprint $table){
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
        });
        */

        Schema::dropIfExists('produto_filiais');

        Schema::dropIfExists('filiais');
    }
}
