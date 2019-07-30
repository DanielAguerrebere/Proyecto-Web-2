<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = ['ciudad','is_airport','direccion'];
  public function categories()
  {
    return $this->belongsToMany('\App\Category');
  }
}
