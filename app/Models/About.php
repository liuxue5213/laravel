<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //添加这两个，最下面的，因为我是手工建表
    protected $table = 'about';
    protected $fillable = ['name','content', 'main_email', 'sub_email','blog','weibo','weixin_no'];
    protected $hidden = [];
}



