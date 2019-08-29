<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $table = 'tborderdetails';
    protected $fillable = ['tborderdetailsidorder', 'tdorderidproduct', 'tborderdetailsquantity',];

    public function order(){
        return $this->belongsTo('app/Order');
    }
    public function product(){
        return $this->belongsTo('app/Product');
    }
    public function user(){
        return $this->belongsTo('app/Order');
    }
}
