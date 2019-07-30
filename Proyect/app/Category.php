<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','passengers','cost'];
    public function cars()
    {
      return $this->hasMany('\App\Car');
    }
    public function locations()
    {
      return $this->belongsToMany('\App\Location');
    }
}
