<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tborder';
    protected $fillable = ['tborderidclient','tborderdescription','tbordertotalprice', 'tbordermethodpay','tborderestade',];

    public function orderdetails(){
        return $this->hashMany('app/Orderdetails');
    }
    public function methodpay(){
        return $this->belongsTo('app/Methodpay');
    }
    public function user(){
        return $this->belongsTo('app/User');
    }
}
