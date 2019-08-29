<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbproduct';
    protected $primaryKey = 'tbproductid';
    protected $fillable = ['tbproductidsupplier','tbproductidcategory','tbproductname', 'tbproductprice','tbproductactive','tbproductvisits','tbproductstock',];
}
