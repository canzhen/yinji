<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
	protected $softDelete = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','privilege','password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
	
	/**
	* rules for checking the validation
	*/
	public static $rules = array(
		'name'=>'required|alpha|min:2',
		'password'=>'required|alpha_num|between:6,12|confirmed'
    );
	
	public function getAuthPassword(){
		return $this->password;
	}
	
	public function getAuthIdentifier(){
        return $this->getKey();
    }
	
	
	/**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }


    public function getRememberTokenName()
    {
        return 'remember_token';
    }
	
}
