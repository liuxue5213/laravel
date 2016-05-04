<?php

namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use App\Http\Controllers\tools;
use App\Models;
use Illuminate\Support\Facades\Redis as Redis;
use Session;

class IndexController extends Controller
{
        // $navs=self::fun_nav();
        // Session::put('id','2');
        // Session::forget('session_id');
//         print_r($_SERVER['REQUEST_URI']);
        // $session_id = Session::get('session_id');  
        // if($session_id){
        //     $user_id=$session_id;
        // }else{
        //     $session='';
        //     $user_id='1';
        // } 
         
        
    //公共信息方法
    public function fun_info($user_id=''){
        $rows = Models\User_Info::where('id',$user_id)->get();
        return $rows;
    }
   
    //公共主页展现   
    public function index()
    {
        $sid=Session::get('session_id');
        return view('layout.home')->withuser_id('1')->with('sid',$sid);;
    }

    //其他用户主页
    public function index_id($user_id)
    {
        $sid=Session::get('session_id');
        //个人信息
        $infos=self::fun_info($user_id); 
        //查询不到  返回错误数据
        if(count($infos)==0){
            return view('errors.404');
        }
    	return view('index.home.index')->with('info',$infos)->withuser_id($user_id)->with('sid',$sid);
    }

    //导航栏主页   
    public function nav_index($nav){  
        $sid=Session::get('session_id'); 
        $user_id='1';
        $infos=self::fun_nav($nav); 
        //404 查询不到数据 返回错误页面
        if(count($infos)==0){
            return view('errors.404');
        }
        return view('index.'.$nav.'.index')->with('info',$infos)->withuser_id($user_id)->with('sid',$sid); 
    }


    //路由群组含有用户ID
    public function nav_id($nav,$user_id){
        $sid=Session::get('session_id');
        if(!$user_id){
            return view('auth.login');
        }
        $infos=self::fun_nav($nav,$user_id); 
        //个人信息
        return view('index.'.$nav.'.index')->with('info',$infos)->with('sid',$sid)->withuser_id($user_id);
    }


    public function show($nav){


    }



public function fun_nav($nav,$user_id=''){
    switch($nav){
        case 'home':
            $info='home';
            break;  
        case 'weibo':
            $info='weibo';
            break;
        case 'music':
            $info='music';
            break;
        case 'image':
            $info='image';
            break;
        case 'email':
            $info='email';
            break;
        case 'talking':
            $info='talking';
            break;
        case 'about':
            if($user_id){
                $info=DB::connection('mysql')->select("select * from cms_user_info a,cms_about b where a.id=b.id and a.id=?",[$user_id]);
                break;
            }else{
                $info=DB::connection('mysql')->select("select * from cms_user_info a,cms_about b where a.id=b.id and a.id=1");
                break;
            }
            
        default:
            $info='';
    }
    return $info;
}




}