<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name','category','price'
  ];

  public function orders(){
    return $this->belongsToMany('App\Order');
  }
}
