<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $table = 'tborderdetails';
    protected $fillable = ['tborderdetailsidorder', 'tdorderidproduct', 'tborderdetailsquantity',];
}
