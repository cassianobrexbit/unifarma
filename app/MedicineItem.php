<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineItem extends Model
{
  protected $fillable = [
    'medicine_id',
    'val_date',
    'num_batch',
    'nf_number',
    'valid_status',
    'available_status'
  ];

  public function operations()
  {
      return $this->hasMany('App\Operation');
  }

  public function medRequests()
  {
      return $this->belongsToMany('App\MedicalRequest');
  }

  public function medicines()
  {
      return $this->belongsTo('App\Medicine');
  }
}
