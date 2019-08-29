<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userlevel extends Model
{
    protected $table = 'tbuserlevel';
    protected $primaryKey = 'tbuserlevelid';
    protected $fillable = ['tbuserlevelname',];
}
