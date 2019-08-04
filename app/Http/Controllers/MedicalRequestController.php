<?php

namespace App\Http\Controllers;

use App\MedicalRequest;
use App\Medicine;
use App\Material;
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

        //dd($medrequest);

        $medrequest->save();

        $medicine = Medicine::find([3, 4]);
        $material = Material::find([1, 2]);

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
    public function edit(MedicalRequest $medicalRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicalRequest  $medicalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalRequest $medicalRequest)
    {
        //
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
