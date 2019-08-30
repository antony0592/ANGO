<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    /**
     * The tabla usada por el modelo.
     *
     * @var string
     */
    protected $table = 'tbuser';
    protected $primaryKey = 'tbuserid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tbuseridcountry', 'tbuseridleveluser', 'tbusername', 'tbuserlastname','tbuseremail', 'tbuseraddress', 'tbuserimage', 'tbuseractive',];

    /**
     * @var array
     */
    protected $hidden = ['tbuserpassword', 'remember_token', 'tbusercreditcard', ];

    public function shoppingcart(){
        return $this->hasOne('App\ShoppingCart');
    }
    public function country(){
        return $this->belongsTo('app/Country');
    }
    public function userlevel(){
        return $this->belongsTo('app/UserLevel');
    }
    public function orders(){
        return $this->hashMany('app/Order');
    }
}