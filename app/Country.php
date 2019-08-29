<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'tbcountry';
    protected $primaryKey = 'tbcountryid';
    protected $fillable = ['tbcountryname',];

    public function users(){
        return $this->hashMany('app/User');
    }
}
