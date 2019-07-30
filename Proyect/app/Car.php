<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $fillable = ['make','model','year','category_id'];
  public function category()
  {
    return $this->belongsTo('\App\Category');
  }
}
