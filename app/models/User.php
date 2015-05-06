<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	
	/**
     * Force username to lowercase.
     *
     * @return lowercase username
     */
	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	
    /**
     * Save hashed password.
     *
     * @return hashed string
     */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}
	
	public function posts()
	{
	    return $this->hasMany('Post');
	}

}
