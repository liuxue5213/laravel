<?php

namespace App\Http\Controllers\Admin;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\tools;
use App\Models;
use Session;

class AboutController extends Controller
{
//个人信息的主页
    public function index(){
        // return 'about';"start active"
        return view('admin.about.index')->with('nav_class','start active');
    }

//保存数据
    public function save(Request $request){
    $sid=Session::get('session_id'); 
	$name=Input::get('name');
	$phone=Input::get('phone');
	$address=Input::get('address');
	$weixin_no=Input::get('weixin_no');
	$blog=Input::get('blog');
	$weibo=Input::get('weibo');
	$company=Input::get('company');
	$jobs=Input::get('jobs');
	$city=Input::get('city');
	$country=Input::get('country');
	$title=Input::get('title');
	$email=Input::get('email');
    $content='Hi,我的名字是'.$name.',目前在'.$company.'工作,任职为'.$jobs;

$user =Models\User::find($sid);
$user->name = $name;
$user->phone= $phone;
$user->address= $address;
$user->save();


$user_info =Models\User_info::find($sid);
$user_info->title = $title;
$user_info->company= $company;
$user_info->jobs= $jobs;
$user_info->email= $email;
$user_info->city= $city;
$user_info->country= $country;
$user_info->about_no= $sid;
$user_info->save();


$about =Models\About::find($sid);
$about->name = $name;
$about->content= $content;
$about->main_email= $email;
$about->blog= $blog;
$about->weibo= $weibo;
$about->weixin_no= $weixin_no;
$about->save();


// print_r(Input::all());
return view('admin.about.index')->with('nav_class','start active');
    }





}