<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $fillable = [
    'tiss_code',
    'commercial_name',
    'description',
    'specialty',
    'min_frac_unity',
    'available_status',
    'frac_qtd',
    'valid_status',
    'quantity',
    'is_frac'
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
