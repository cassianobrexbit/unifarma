<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use Mtownsend\XmlToArray\XmlToArray;
use Tightenco\Collect\Support\Collection;
use App\NFE;
use App\Medicine;

class MedicineController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
       return view('medicine.import');
    }



    public function index(){

      $medicines = Medicine::all();

      return view('medicine/index',array('medicines' => $medicines));

    }

    public function nfeIndex(){

      $nfes = NFE::all();

      return view('medicine/nfeindex',array('nfes' => $nfes));

    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function insertExcel()
    {

        $collection = (new FastExcel)->import(request()->file('fileExcel'));

        foreach ($collection as $item) {


            Medicine::create([

                  'tiss_code' => $item['Código - versão TISS 3.04.00'],
                  'commercial_name' => $item['Nome e Apresentação Comercial'],
                  'active_principle' => $item['Principio Ativo'],
                  'is_generic' => $item['Genérico'],
                  'min_frac_unity' => $item['Unid Mín Fração']

            ]);
        }

        return back();
    }

    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);

        return view('medicine.show', compact('medicine'));
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function insertXML()
    {

        $xml = request()->file('fileXML');


        \Rodenastyle\StreamParser\StreamParser::xml($xml)->each(function(Collection $nfec){


          $nfe = NFE::create([

            'nfID' => $nfec['infNFe']['Id'],
            'versao' => $nfec['infNFe']['versao'],
            'cUF' => $nfec['infNFe'][0]['cUF'],
            'cNF' => $nfec['infNFe'][0]['cNF'],
            'natOP' => $nfec['infNFe'][0]['natOp'],
            'mod' => $nfec['infNFe'][0]['mod'],
            'serie' =>  $nfec['infNFe'][0]['serie'],
            'nNF' =>  $nfec['infNFe'][0]['nNF'],
            'dhEmi' => $nfec['infNFe'][0]['dhEmi'],
            //'dhSaiEnt' => $nfec['infNFe'][0]['dhSaiEnt'],
            'tpNF' => $nfec['infNFe'][0]['tpNF'],
            'idDest' => $nfec['infNFe'][0]['idDest'],
            'cMunFG' => $nfec['infNFe'][0]['cMunFG'],
            'tpImp' => $nfec['infNFe'][0]['tpImp'],
            'tpEmis' => $nfec['infNFe'][0]['tpEmis'],
            'cDV' => $nfec['infNFe'][0]['cDV'],
            'tpAmb' => $nfec['infNFe'][0]['tpAmb'],
            'finNFe' => $nfec['infNFe'][0]['finNFe'],
            'indFinal' => $nfec['infNFe'][0]['indFinal'],
            'indPres' => $nfec['infNFe'][0]['indPres'],
            'procEmi' => $nfec['infNFe'][0]['indPres'],
            'verProc' => $nfec['infNFe'][0]['verProc'],
            'CNPJ' => $nfec['infNFe'][1]['CNPJ'],
            'xNome' => $nfec['infNFe'][1]['xNome'],
            'xFant' => $nfec['infNFe'][1]['xFant'],
            'xLgr' => $nfec['infNFe'][1]['enderEmit'][0][0],
            'nro' => $nfec['infNFe'][1]['enderEmit'][1][0],
            'cpl' => $nfec['infNFe'][1]['enderEmit'][2][0],
            'xBairro' => $nfec['infNFe'][1]['enderEmit'][3][0],
            'cMun' => $nfec['infNFe'][1]['enderEmit'][4][0],
            'xMun' =>  $nfec['infNFe'][1]['enderEmit'][5][0],
            'UF' => $nfec['infNFe'][1]['enderEmit'][6][0],
            'CEP' => $nfec['infNFe'][1]['enderEmit'][7][0],
            'cPais' => $nfec['infNFe'][1]['enderEmit'][8][0],
            'xPais' => $nfec['infNFe'][1]['enderEmit'][9][0],
            'fone' => $nfec['infNFe'][1]['enderEmit'][10][0],
            'IE' => $nfec['infNFe'][1]['IE'],
            'CRT' => $nfec['infNFe'][1]['CRT'],

            'dCNPJ' => $nfec['infNFe'][2]['CNPJ'],
            'dxNome' => $nfec['infNFe'][2]['xNome'],
            'dxLgr' => $nfec['infNFe'][2]['enderDest'][0][0],
            'dnro' => $nfec['infNFe'][2]['enderDest'][1][0],
            'dxBairro' => $nfec['infNFe'][2]['enderDest'][2][0],
            'dcMun' =>  $nfec['infNFe'][2]['enderDest'][3][0],
            'dxMun' => $nfec['infNFe'][2]['enderDest'][4][0],
            'dUF' => $nfec['infNFe'][2]['enderDest'][5][0],
            'dCEP' => $nfec['infNFe'][2]['enderDest'][6][0],
            'dcPais' => $nfec['infNFe'][2]['enderDest'][7][0],
            'dxPais' => $nfec['infNFe'][2]['enderDest'][8][0],
            'dfone' => $nfec['infNFe'][2]['enderDest'][9][0],
            'indIEDest' => $nfec['infNFe'][2]['indIEDest'][0],
            'email' => $nfec['infNFe'][2]['email'][0],

            'nItem' => $nfec['infNFe'][4]['nItem'],
            'cProd' => $nfec['infNFe'][4]['prod'][0][0],
            'cEAN' => $nfec['infNFe'][4]['prod'][1][0],
            'xProd' => $nfec['infNFe'][4]['prod'][2][0],
            'NCM' => $nfec['infNFe'][4]['prod'][3][0],
            'CFOP' => $nfec['infNFe'][4]['prod'][4][0],
            'uCom' => $nfec['infNFe'][4]['prod'][5][0],
            'qCom' => $nfec['infNFe'][4]['prod'][6][0],
            'vUnCom' => $nfec['infNFe'][4]['prod'][7][0],
            'vProd' => $nfec['infNFe'][4]['prod'][8][0],
            'nLote' => $nfec['infNFe'][4]['prod'][15]['nLote'],
            'qLote' => $nfec['infNFe'][4]['prod'][15]['qLote'],
            'dFab' => $nfec['infNFe'][4]['prod'][15]['dFab'],
            'dVal' => $nfec['infNFe'][4]['prod'][15]['dVal'],

            'tCNPJ' => $nfec['infNFe'][6]['transporta'][0][0],
            'txNome' => $nfec['infNFe'][6]['transporta'][1][0],
            'tIE' => $nfec['infNFe'][6]['transporta'][2][0],
            'txEnder' => $nfec['infNFe'][6]['transporta'][3][0],
            'txMun' => $nfec['infNFe'][6]['transporta'][4][0],
            'tUF' => $nfec['infNFe'][6]['transporta'][5][0],
            'qVol' => $nfec['infNFe'][6]['vol'][0][0],
            'volVNF' => $nfec['infNFe'][6]['vol'][1][0],
            'nFat' => $nfec['infNFe'][7]['fat'][0][0],
            'vOrig' => $nfec['infNFe'][7]['fat'][1][0],
            'cvDesc' => $nfec['infNFe'][7]['fat'][2][0],
            'vLiq' => $nfec['infNFe'][7]['fat'][3][0],
            'nDup' => $nfec['infNFe'][7]['dup'][0][0],
            'dVenc' =>  $nfec['infNFe'][7]['dup'][1][0],
            'vDup' => $nfec['infNFe'][7]['dup'][2][0],
            'indPag' => $nfec['infNFe'][8]['detPag'][0][0],
            'tPag' =>  $nfec['infNFe'][8]['detPag'][1][0],
            'vPag' =>  $nfec['infNFe'][8]['detPag'][2][0],
            'vTroco' =>$nfec['infNFe'][8]['vTroco']
          ]);

        });



        return back();
    }
}
