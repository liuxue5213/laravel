<?php

/**
 * Created by PhpStorm.
 * User: FRANK
 * Date: 2015/7/28
 * Time: 9:51
 */
namespace App\Http\Controllers\tools;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

//#  新增  ##
use Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

abstract class ShareFun extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    
    /*
     *分页
     * @param  array  $collection  查询出的数据 e.g. $rows
     * @param  int  $perPage  每页显示数据数 e.g. 5
     * @param  string  $path  分页参数 e.g. index  index?page=1
     *
     * @return Response
    */
    public static function page($collection, $perPage, $path = '') {
        
        //获取分页 的页码
        //        $currentPage=0;
        //        if(@$_SERVER['REQUEST_URI']){
        //            $page=explode("=",$_SERVER['REQUEST_URI']);
        //            if(isset($page[1])) {
        //                $currentPage = $page[1];
        //            }
        //        }else{
        //            $currentPage=0;
        //        }
        $page = LengthAwarePaginator::resolveCurrentPage();
        $currentPage = $page - 1;
        ($currentPage < 0) ? $currentPage = 0 : '';
        
        //        echo $currentPage;
        //创建一个新的数组集合
        $collection = new Collection($collection);
        
        //获取分页的数据
        $currentPageSearchResults = $collection->slice($currentPage * $perPage, $perPage)->all();
        
        //创建一个新的分页模块
        $paginator = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);
        
        //获取分页path
        $url = Request::path();
        $path ? $path : $url;
        
        //设置分页的path
        $paginator->setPath($path);
        return $paginator;
    }
    
    /*
     * 将stdClass object 转为 普通array
    */
    public static function object_to_array($object) {
        $get_array = json_decode(json_encode($object), true);
        return $get_array;
    }
    
    /*$timeout为超时时间，单位是秒，默认为1s。*/
    public static function curl_get_contents($url, $timeout = 1) {
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, $timeout);
        $result = curl_exec($curlHandle);
        //HTTP STAT码
        $stat=curl_getinfo($curlHandle,CURLINFO_HTTP_CODE); 
        curl_close($curlHandle);
        if($stat == '404'){
            return '404';
        }else{
            return $result;
        }
    }
    
    public static function validateEmail($email) {
        $isValid = true;
        $atIndex = strrpos($email, "@");
        if (is_bool($atIndex) && !$atIndex) {
            $isValid = false;
        } else {
            $domain = substr($email, $atIndex + 1);
            $local = substr($email, 0, $atIndex);
            $localLen = strlen($local);
            $domainLen = strlen($domain);
            if ($localLen < 1 || $localLen > 64) {
                $isValid = false;
            } else if ($domainLen < 1 || $domainLen > 255) {
                $isValid = false;
            } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
                $isValid = false;
            } else if (preg_match('/\\.\\./', $local)) {
                $isValid = false;
            } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
                $isValid = false;
            } else if (preg_match('/\\.\\./', $domain)) {
                $isValid = false;
            } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
                if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                    $isValid = false;
                }
            }
            if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
                $isValid = false;
            }
        }
        return $isValid;
    }
    /**
     *
     *函数功能：计算两个以YYYY-MM-DD为格式的日期，相差多少天（日）
     *return int
     */
    public static function DateMinus($date1,$date2){
        $Date_List_a1=explode("-",$date1);
        $Date_List_a2=explode("-",$date2);
        $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);
        $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);
        $Days=round(($d1-$d2)/3600/24);
        return $Days;
    }
}

