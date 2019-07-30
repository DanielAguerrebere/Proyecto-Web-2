<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name','category_id','init_date','final_date','init_place','final_place','price'];
    public $timestamps = false;
    public function extras()
    {
      return $this->belongsToMany('\App\Extra');
    }
}
