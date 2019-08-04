<?php

namespace App\Http\Controllers;

use App\MedicalRequest;
use App\Medicine;
use App\Material;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MedicalRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mrequests = MedicalRequest::all();

      return view('medicalRequest/index',array('mrequests' => $mrequests));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicalRequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $medrequest = new MedicalRequest($request->all());

        $medrequest->val_date = Carbon::now();

        $medrequest->val_date->addDays(90);

        $medrequest->save();

        //Medicamento

        $medicine = Medicine::find([3, 4]);

        $medobj =  Medicine::findOrFail($medicine[0]['id']);
        $medobj2 =  Medicine::findOrFail($medicine[1]['id']);

        $medobj->available_status = "Transito";
        $medobj2->available_status = "Transito";

        $medobj->save();
        $medobj2->save();

        //Material

        $material = Material::find([1, 2]);

        $matobj =  Material::findOrFail($material[0]['id']);
        $matobj2 =  Material::findOrFail($material[1]['id']);

        $matobj->available_status = "Transito";
        $matobj2->available_status = "Transito";

        $matobj->save();
        $matobj2->save();

        //Attach

        $medrequest->medicines()->attach($medicine);
        $medrequest->materials()->attach($material);

        return redirect('medicalRequest/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicalRequest  $medicalRequest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mrequest = MedicalRequest::findOrFail($id);

        return view('medicalRequest.show', compact('mrequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalRequest  $medicalRequest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mrequest = MedicalRequest::findOrFail($id);

        return view('medicalRequest.edit', compact('mrequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicalRequest  $medicalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mrequest = MedicalRequest::findOrFail($id);

        //dd($mrequest->medicines[0]['id']);
        $medobj =  Medicine::findOrFail($mrequest->medicines[0]['id']);
        $medobj2 =  Medicine::findOrFail($mrequest->medicines[1]['id']);

        $matobj =  Material::findOrFail($mrequest->materials[0]['id']);
        $matobj2 =  Material::findOrFail($mrequest->materials[1]['id']);

        //dd($matobj2->available_status);

        $mrequest->status = $request->status;

        if ($request->status == "Executada") {
          $medobj->available_status = "Executado";
          $medobj2->available_status = "Executado";
          $matobj->available_status = "Executado";
          $matobj2->available_status = "Executado";
        }else{
          $medobj->available_status = "Disponivel";
          $medobj2->available_status = "Disponivel";
          $matobj->available_status = "Disponivel";
          $matobj2->available_status = "Disponivel";
        }


        $medobj->save();
        $medobj2->save();
        $matobj->save();
        $matobj2->save();

        $mrequest->update();

        return redirect('medicalRequest/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalRequest  $medicalRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalRequest $medicalRequest)
    {
        //
    }
}
