<?php

namespace App\Http\Controllers;

use App\MedicineItem;
use App\Medicine;
use App\NFE;
use DB;
use Illuminate\Http\Request;

class MedicineItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('meditems/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medicines = Medicine::pluck('commercial_name','id');

        $nfes = NFE::pluck('xprod','id');

        return view('meditems.create', compact('medicines','nfes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $meditem = new MedicineItem($request->all());

          $meditem->valid_status = "S";
          $meditem->available_status = "Disponivel";

          $medicine = Medicine::findOrFail($request->medicines);

          //$medicine = DB::table('medicines')->where('id', '==' ,$request->medicines)->get();

          $nfe = NFE::findOrFail($request->nfes);
          //dd($nfe);

          $meditem->medicine_id = $request->medicines;

          $meditem->nf_number = $nfe->nfID;

          $meditem->save();

          dd($meditem);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineItem  $medicineItem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineItem  $medicineItem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineItem  $medicineItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineItem  $medicineItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineItem $medicineItem)
    {
        //
    }
}
