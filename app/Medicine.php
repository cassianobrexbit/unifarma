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
  ];
}
