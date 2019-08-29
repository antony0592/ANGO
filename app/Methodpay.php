<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Methodpay extends Model
{
    protected $table = 'tbmethodpay';
    protected $primaryKey = 'tbmethodpayid';
    protected $fillable = ['tbmethodpayname',];
}
