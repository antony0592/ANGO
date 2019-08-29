<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tborder';
    protected $fillable = ['tborderidclient','tborderdescription','tbordertotalprice', 'tbordermethodpay','tborderestade',];
}
