<?php

namespace App\Http\Controllers;

use App\MaterialItem;
use Illuminate\Http\Request;

class MaterialItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matitems/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $materials = Material::pluck('commercial_name','id');

      $nfes = NFE::pluck('xprod','id');

      return view('matitems.create', compact('materials','nfes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $matitem = new MedicineItem($request->all());

      $matitem->valid_status = "S";
      $matitem->available_status = "Disponivel";

      $material = Material::findOrFail($request->materials);

      //$material = DB::table('materials')->where('id', '==' ,$request->materials)->get();

      $nfe = NFE::findOrFail($request->nfes);
      //dd($nfe);

      $matitem->material_id = $request->materials;

      $matitem->nf_number = $nfe->nfID;

      $matitem->save();

      dd($matitem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaterialItem  $materialItem
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialItem $materialItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaterialItem  $materialItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialItem $materialItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaterialItem  $materialItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialItem $materialItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaterialItem  $materialItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialItem $materialItem)
    {
        //
    }
}
