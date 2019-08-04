<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRequest extends Model
{

  protected $fillable = [
    'reg_number',
    'client_name',
    'client_email',
    'client_phone',
    'client_cellphone',
    'status',
    'venc_date'
  ];

  public function medicines()
  {
      return $this->belongsToMany('App\Medicine');
  }

  public function materials()
  {
      return $this->belongsToMany('App\Material');
  }



}
