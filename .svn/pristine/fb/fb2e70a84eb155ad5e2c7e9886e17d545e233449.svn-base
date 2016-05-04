<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\tools;
use Session;
use App\Models;

class WeiboController extends Controller
{
    public function index(){

        // return 'about';
        return view('admin.weibo.index')->with('nav_class','start active');
    }

    public function show(){
        //session_id 
        $sid=Session::get('session_id');

        if(!$sid){
            $id='1';
        }else{
            $id=$sid;
        }
     
        //年份
        // $years=DB::connection('mysql')->select("select distinct (date_format(created_at,'%Y')) as year from cms_contents where post_author=? order by year desc",[$id]);
        //博客信息
        // $rows=DB::connection('mysql')->select("select post_author,post_title,post_content,post_status,comment_status,post_password,post_parent,menu_order,comment_count,created_at,updated_at,deleted_at,date_format(created_at,'%Y') as year from cms_contents where post_author=? order by year desc",[$id]);
        // $year=tools\ShareFun::object_to_array($years);
        // $blog=tools\ShareFun::object_to_array($rows);
        // print_r($year);
        // 
//     $new_blog=array();
//     for($i=0;$i<count($year);$i++){
//         for($k=0;$k<count($blog);$k++){
//             if($year[$i]['year']==$blog[$k]['year']){
//                 $new_blog[$year[$i]['year']]=$blog[$k];
//             }
//         }
//     }
//     
        
        $blogs = Models\Contents::where('post_author', '=', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(7);
        //判断 是否有查询结果
        if(count($blogs)==0){
            return view('errors.404');
        }

        return view('index.weibo.show')->with('sid',$sid)->with('user_id','1')->with('blog',$blogs);
    }



    //具体的一页数据
    public function show_id($id){
        $sid=Session::get('session_id');
            
        if(!$sid){
            $user_id='1';
        }

        //根据ID  查询数据
        // $blogs = Models\Contents::all()->where('id',$id);
        $blogs = Models\Contents::where('id',$id)->get();

// print_r($blogs);
// exit;
        if(count($blogs)==0){
            return view('errors.404');
        }

        return view('index.weibo.showid')->with('user_id','1')->with('sid',$sid)->with('blog',$blogs);   
    }


}