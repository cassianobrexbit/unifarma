<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNFESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_f_e_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nfID');
            $table->double('versao',2,1)->nullable();
            $table->string('cUF');
            $table->string('cNF');
            $table->string('natOP');
            $table->bigInteger('mod');
            $table->bigInteger('serie');
            $table->bigInteger('nNF');
            $table->string('dhEmi');
            $table->string('dhSaiEnt');
            $table->bigInteger('tpNF');
            $table->bigInteger('idDest');
            $table->string('cMunFG');
            $table->bigInteger('tpImp');
            $table->bigInteger('tpEmis');
            $table->bigInteger('cDV');
            $table->bigInteger('tpAmb');
            $table->bigInteger('finNFe');
            $table->bigInteger('indFinal');
            $table->bigInteger('indPres');
            $table->bigInteger('procEmi');
            $table->double('verProc',2,1);
            //Emitente
            $table->string('CNPJ');
            $table->string('xNome');
            $table->string('xFant');
            $table->string('xLgr');
            $table->integer('nro');
            $table->string('cpl');
            $table->string('xBairro');
            $table->string('cMun');
            $table->string('xMun');
            $table->string('UF');
            $table->string('CEP');
            $table->bigInteger('cPais');
            $table->string('xPais');
            $table->string('fone');
            //fimemitente
            $table->string('IE');
            $table->bigInteger('CRT');
            //Destinatario
            $table->string('dCNPJ');
            $table->string('dxNome');
            //$table->string('dxFant');
            $table->string('dxLgr');
            $table->integer('dnro');
            $table->string('dxBairro');
            $table->string('dcMun');
            $table->string('dxMun');
            $table->string('dUF');
            $table->string('dCEP');
            $table->bigInteger('dcPais');
            $table->string('dxPais');
            $table->string('dfone');
            $table->string('indIEDest');
            $table->string('email');
            //fimdestinatario
            //produto
            $table->string('cProd')->nullable();
            $table->double('nItem', 15,8)->nullable();
            $table->string('cEAN')->nullable();
            $table->string('xProd')->nullable();
            $table->string('NCM')->nullable();
            $table->string('CFOP')->nullable();
            $table->string('uCom')->nullable();
            $table->decimal('qCom',8,4);
            $table->double('vUnCom',12,10)->nullable();
            $table->double('vProd',6,2)->nullable();
            $table->string('cEANTrib')->nullable();
            $table->string('uTrib')->nullable();
            $table->double('qTrib',7,4)->nullable();
            $table->double('vUnTrib',12,10)->nullable();
            $table->bigInteger('indTot')->nullable();
            $table->string('nFCI')->nullable();
            //rastreio
            $table->string('nLote');
            $table->string('qLote');
            $table->date('dFab');
            $table->date('dVal');
            //fimrastreio
            //fimProduto

            //imposto
            //$table->bigInteger('icmsorig')->nullable();
            //$table->bigInteger('icmsCST')->nullable();
            //$table->string('IPIcEnq')->nullable();
            //$table->string('IPICST')->nullable();
            //$table->double('IPIvBC',6,2)->nullable();
            //$table->double('pIPI',6,2)->nullable();
            //$table->double('vIPI',6,2)->nullable();
            //$table->bigInteger('PISNTCST');
            //$table->bigInteger('COFINSNTCST');

            $table->double('vBC',6,2)->nullable();
            $table->double('vICMS',6,2)->nullable();
            $table->double('vICMSDeson',6,2)->nullable();
            $table->double('vFCPUFDest',6,2)->nullable();
            $table->double('vICMSUFDest',6,2)->nullable();
            $table->double('vICMSUFRemet',6,2)->nullable();
            $table->double('vBCST',6,2)->nullable();
            $table->double('vFCPST',6,2)->nullable();
            $table->double('vFCPSTRet',6,2)->nullable();
            $table->double('ICMVProd',6,2)->nullable();
            $table->double('vFrete',6,2)->nullable();
            $table->double('vSeg',6,2)->nullable();
            $table->double('vDesc',6,2)->nullable();
            $table->double('vII',6,2)->nullable();
            $table->double('icvIPI',6,2)->nullable();
            $table->double('vIPIDevol',6,2)->nullable();
            $table->double('vCOFINS',6,2)->nullable();
            $table->double('vOutro',6,2)->nullable();
            $table->double('vNF',6,2)->nullable();
            //fimimposto
            //transporte
            $table->bigInteger('modFrete')->nullable();
            $table->string('tCNPJ');
            $table->string('txNome');
            $table->string('tIE');
            $table->string('txEnder');
            $table->string('txMun');
            $table->string('tUF');
            //volume
            $table->bigInteger('qVol');
            $table->double('volVNF',8,3);
            //fimvolume
            //fimtransporte
            //cobranca
            $table->string('nFat');
            $table->double('vOrig',6,2);
            $table->double('cvDesc',6,2);
            $table->double('vLiq',6,2);
            //fimcobranca
            //duplicata
            $table->bigInteger('nDup');
            $table->string('dVenc');
            $table->double('vDup',8,2);
            //fimduplicata
            //pag
            $table->bigInteger('indPag');
            $table->bigInteger('tPag');
            $table->double('vPag',8,2);
            //fimpag
            $table->double('vTroco',8,2);
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
        Schema::dropIfExists('n_f_e_s');
    }
}
