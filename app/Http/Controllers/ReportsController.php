<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\MedicalRequest;
use DB;

use Carbon\Carbon;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
  public function index()
  {

    return view('reports.index');
  }

  public function medicineItemsIndexByStatus()
  {

    $medicine_items  = DB::table('medicine_items')->where('available_status','Transito')->get();


    return view('reports.medicineItemsByStatus',compact('medicine_items'));
  }

  public function medicineItemsExecuted()
  {

    $medicine_items  = DB::table('medicine_items')->where('available_status','Executado')->get();

    return view('reports.medicineItemsExecuted',compact('medicine_items'));
  }

  public function medicineItemsExpiringIn30Days()
  {

    $medicine_items  = DB::table('medicine_items')->where('val_date', '<', Carbon::now()->subDays(30))->get();

    return view('reports.medicineItemsExpiring',compact('medicine_items'));
  }

  public function medicalRequestsExpiringIn30Days()
  {

    $medical_requests  = DB::table('medical_requests')->where('val_date', '<', Carbon::now()->subDays(30))->get();

    return view('reports/medicalRequestsExpiring',compact('medical_requests'));
  }

  public function medicalRequestsCanceled()
  {

    $medical_requests  = DB::table('medical_requests')->where('status','Cancelada')->get();

    return view('reports/medicalRequestsCanceled',compact('medical_requests'));
  }

  public function medicalRequestsExecuted()
  {

      $medical_requests  = DB::table('medical_requests')->where('status','Executada')->get();

    return view('reports/medicalRequestsExecuted',compact('medical_requests'));
  }

  public function medicalRequestsExpired()
  {

      $medical_requests  = DB::table('medical_requests')->where('status','Vencida')->get();

    return view('reports/medicalRequestsExpired',compact('medical_requests'));
  }

}
