<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
  protected $fillable = [
    'type',
    'date',
    'medicine_id',
    'user_id',
    'material_id',
    'description',
  ];

  public function medicine()
  {
      return $this->belongsTo('App\Medicine');
  }

  public function material()
  {
      return $this->belongsTo('App\Material');
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }

}
