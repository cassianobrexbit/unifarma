<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use Mtownsend\XmlToArray\XmlToArray;
use Tightenco\Collect\Support\Collection;
use App\NFE;
use App\Material;

class MaterialController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
       return view('material.import');
    }

    public function index(){

      $materials = Material::all();

      return view('material/index',array('materials' => $materials));

    }

    public function show($id)
    {
        $material = Material::findOrFail($id);

        return view('material.show', compact('material'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function insertExcel()
    {

        $collection = (new FastExcel)->import(request()->file('fileExcel'));

        foreach ($collection as $item) {


            Material::create([

                  'tiss_code' => $item['Código - versão TISS 3.04.00'],
                  'commercial_name' => $item['Nome Comercial'],
                  'description' => $item['Descrição do Produto'],
                  'specialty' => $item['Especialidade do Produto'],
                  'min_frac_unity' => $item['Unid Mín Fração']

            ]);
        }

        return back();
    }


}
