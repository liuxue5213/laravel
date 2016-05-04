<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Info extends Model
{
    protected $table = 'user_info';
    protected $fillable = ['title', 'company', 'jobs','email','city','country','deleted_at','created_at','updated_at','is_lock','about_no'];
    protected $hidden = [];
}
