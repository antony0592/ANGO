<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'tbsupplier';
    protected $primaryKey = 'tbsupplierid';
    protected $fillable = ['tbsuppliername', 'tbsupplieractive', 'tbsupplierkey',];

    public function products(){
        return $this->hashMany('app/Product');
    }
}
