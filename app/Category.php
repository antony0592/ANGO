<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tbcategory';
    protected $primaryKey = 'tbcategoryid';
    protected $fillable = ['tbcategoryname',];
}
