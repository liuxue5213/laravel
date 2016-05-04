<?php

namespace App\Http\Controllers\Admin;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\tools;

class MusicController extends Controller
{
    public function index(){
        // return 'about';
        return view('admin.music.index')->with('name','liuxue');
    }

    //前台  音乐搜索
    public function search(Request $request){
        $musicname=Input::get('musicname');
        $singer=Input::get('singer');
        //拼接数据   进行urlencode
        $encode_music=urlencode($musicname).'$$'.urlencode($singer);
        $url='http://box.zhangmen.baidu.com/x?op=12&count=1&title='.$encode_music;
        //接口 获取数据
        $return_url_xml=tools\Curl::get($url);
        //解析xml
        // $xml_object=simplexml_load_string($return_url_xml,'SimpleXMLElement',LIBXML_NOCDATA);
$xml_object = simplexml_load_string($return_url_xml,null,LIBXML_NOCDATA);
// var_dump($xml);

        $xml_array=tools\ShareFun::object_to_array($xml_object);

        $new_array=array();
        for($i=0;$i<$xml_array['count'];$i++){
            $encode=$xml_array['url'][$i]['encode'];
            $decode=$xml_array['url'][$i]['decode'];
            $lrcid=$xml_array['url'][$i]['lrcid'];
            
            $arr[$i]=(explode("/",$encode)); 

            $ck[$i]=count($arr[$i]);
            // $ck=count($arr[]);
            for($k=0;$k<$ck[$i];$k++){
                $arr[$i][$ck[$i]-1]=$decode;
            } 
           
            $new_array[$i]=implode("/",$arr[$i]);

        }

 
        return view('index.music.index')->with('name',$musicname)->with('data',$new_array);
    }


}
               

