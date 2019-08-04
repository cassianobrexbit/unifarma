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
    'is_frac',
    'frac_qtd',
  ];

  public function items()
  {
      return $this->hasMany('App\MaterialItem');
  }
}
