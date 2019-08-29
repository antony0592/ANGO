<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    protected $table = 'tbshoppingcart';
    protected $primaryKey = 'tbshoppingcartid';
    protected $fillable = ['tbshoppingcartiduser','tbshoppingcartidproduct','tbshoppingcartquantity',];

    public function product(){
        return $this->belongsTo('app/Product');
    }
    public function user(){
        return $this->hasOne('App\User');
    }
}
