<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
  protected $fillable = ['name','cost'];

  public function reservations()
  {
    return $this->belongsToMany('\App\Reservation');
  }
}
