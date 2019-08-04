<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
  protected $fillable = [
    'tiss_code',
    'commercial_name',
    'active_principle',
    'is_generic',
    'min_frac_unity',
    'frac_qtd',
    'available_status',
    'valid_status',
    'quantity',
    'is_frac',
    'val_date'
  ];

  public function operations()
  {
      return $this->hasMany('App\Operation');
  }

  public function medRequests()
  {
      return $this->belongsToMany('App\MedicalRequest');
  }
}
