<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product as Product;
use App\User as User;


class Order extends Model
{

    protected $fillable = [

      'name','user_id','status'
    ];

    public function products(){

      return $this->belongsToMany(Product::class);
    }

    public function users(){
      return $this->belongsTo(User::class);
    }
}
