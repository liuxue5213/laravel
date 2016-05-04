<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


/**
 * 用户模型
 *
 * @author raoyc <raoyc2009@gmail.com>
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    
    use Authenticatable, CanResetPassword;
    
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'realname', 'gender', 'pid', 'pid_card_thumb1', 'pid_card_thumb2', 'avatar', 'phone', 'address', 'emergency_contact'];
    protected $hidden = ['password', 'confirmation_code', 'remember_token'];
    
}
