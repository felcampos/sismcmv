<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaGeralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabela_geral', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_operacao', 255)->nullable();
            $table->char('txt_origem', 2)->nullable();
            $table->integer('cod_ibge')->nullable();
            $table->string('txt_regiao', 255)->nullable();
            $table->string('txt_rm_ride', 255)->nullable();
            $table->char('txt_uf', 2)->nullable();
            $table->string('txt_porte', 255)->nullable();
            $table->boolean('bln_capital')->nullable();
            $table->string('txt_regic_ibge', 255)->nullable();
            $table->string('txt_municipio', 255)->nullable();
            $table->string('txt_faixa', 7)->nullable();
            $table->string('txt_faixa_2', 7)->nullable();
            $table->string('txt_modalidade', 255)->nullable();
            $table->string('txt_submodalidade', 255)->nullable();
            $table->integer('vlr_uh')->nullable();
            $table->double('vlr_valor', 14, 2)->nullable();
            $table->double('vlr_subsidio_ogu', 14, 2)->nullable();
            $table->double('vlr_subsidio_fgts', 14, 2)->nullable();
            $table->double('vlr_valor_total', 14, 2)->nullable();
            $table->integer('qtd_entregues')->nullable();
            $table->integer('vlr_pmcmv')->nullable();
            $table->string('txt_if', 255)->nullable();
            $table->double('prc_percentual', 5, 2)->nullable();
            $table->integer('qtd_concluidas')->nullable();
            $table->double('vlr_contrapartida', 14, 2)->nullable();
            $table->string('txt_nome_empreendimento', 255)->nullable();
            $table->string('txt_endereco', 255)->nullable();
            $table->string('txt_construtora', 255)->nullable();
            $table->string('txt_cnpjconst', 14)->nullable();
            $table->string('txt_tipologia_unidade', 255)->nullable();
            $table->date('dte_dataass')->nullable();
            $table->double('vlr_liberado', 14, 2)->nullable();
            $table->date('dte_prev_term')->nullable();
            $table->integer('qtd_comercializadas')->nullable();
            $table->boolean('bln_elegivel_far')->nullable();
            $table->string('txt_recorte_presidencia', 255)->nullable();
            $table->integer('dte_ano_ass')->nullable();
            $table->double('vlr_recurso_proprio', 14, 2)->nullable();
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
        Schema::drop('tabela_geral');
    }
}
