<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbproduct';
    protected $primaryKey = 'tbproductid';
    protected $fillable = ['tbproductidsupplier','tbproductidcategory','tbproductname', 'tbproductprice','tbproductactive','tbproductvisits','tbproductstock',];

    public function supplier(){
        return $this->belongsTo('app/Supplier');
    }
    public function category(){
        return $this->belongsTo('app/Category');
    }
    public function shoppingcart(){
        return $this->hashMany('app/Shoppingcart');
    }
    

}
