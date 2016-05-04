<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\tools;
use Mail;
use Excel;

class TestController extends Controller
{
    /**
     * 查询统计数据
     */
    public function index()
    {
        $data=DB::connection('mysql_ali')->select("select o.*,CASE o.Status WHEN 0 THEN '提交运营商失败' WHEN 1 THEN '提交运营商失败' WHEN 2 THEN '订购成功' ELSE '订购失败' END as Ens from operatororder o
LEFT JOIN sellorder p on o.TradeID=p.TradeId where p.SellID=110054 ORDER BY o.ID desc");
        $data=tools\ShareFun::page($data,50);//分页
        return view('test.test')->with('data',$data);
    }

    //导出数据excel
    public function excel(){
        //excel标题
        $GLOBALS['title']=date('Y-m-d')."数据";
        $db=DB::connection('mysql_ali')->select("select o.*,CASE o.Status WHEN 0 THEN '提交运营商失败' WHEN 1 THEN '提交运营商失败' WHEN 2 THEN '订购成功' ELSE '订购失败' END as Ens from operatororder o
LEFT JOIN sellorder p on o.TradeID=p.TradeId where p.SellID=110054 ORDER BY o.ID desc");
        //object转为数组
        $db=tools\ShareFun::object_to_array($db);
        $data = array(
            array(' ','手机号码','交易ID','创建时间','使用运营商通道','运营商订单ID','运营商通道ID','状态','状态码','状态描述','订单完成时间','该次订购对应的渠道列表','流量规格')
        );
        //循环拼接数据
        for($i=0;$i<count($db);$i++){
            array_push($data,array('',$db[$i]['Mobile'],$db[$i]['TradeID'],$db[$i]['CreateTime'],$db[$i]['channelName'],$db[$i]['OrderID'],$db[$i]['channelId'],$db[$i]['Ens'],$db[$i]['StatusCode'],$db[$i]['StatusDesc'],$db[$i]['FinishTime'],$db[$i]['ChannelIDs'],$db[$i]['Flow']));
        }
   
        Excel::create($GLOBALS['title'], function($excel) use($data) {
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->fromArray($data); 
            });
        })
        // ->export('xls');
        ->store('xls', public_path('file'));

        $mail='956149307@qq.com';
        $data='';
        TestController::email($mail,$data);

    }




    //发送电子邮件
  public function email($tomail,$data){ 
        $GLOBALS['tomail'] = $tomail;
        Mail::send('test.email',['name' =>'JohnScott','mh' =>'this is 测试 page'], function($message){
            // $message->from($email, '每日数据');
            $message->to($GLOBALS['tomail'],$GLOBALS['title'])
                ->cc('liuxue@datacomx.com')
                // ->cc('liyao@datacomx.com')
                // ->cc('mengyu@datacomx.com')
                // ->cc('taolin@datacomx.com')
                // ->cc('wangzhen@datacomx.com')
                // ->cc('wangshun@datacomx.com')
                ->subject($GLOBALS['title']) ;
            $filename='file/'.$GLOBALS['title'].'.xls' ;
            // return $filename;
            $attachment = public_path($filename);
            //在邮件中上传附件
            $message->attach($attachment,['as'=>"=?UTF-8?B?".base64_encode($GLOBALS['title'])."?=.xls"]);
        });
    }



    /**
     * 查询统计数据
     */
    public function mobile(){
        $stime=date("Y-m-d 00:00:00",strtotime("-1 day"));
        $etime=date('Y-m-d 00:00:00');

        $data=DB::connection('mysql_ali')->select("select A.Mobile,A.CreateTime,A.`Status`,A.StatusDesc,A.productSize,A.TradeId,A.SellID,A.FinishTime,B.OrderID,B.channelName,p.provinceName FROM sellorder A LEFT JOIN base_mobile_location m ON LEFT(A.Mobile,7) = m.telPrefix7 LEFT JOIN base_province p ON p.provinceId = m.provinceId LEFT JOIN (select TradeID,OrderID,channelName from  operatororder where ID in(select max(A.ID) from operatororder A where  A.TradeID in (select TradeId FROM sellorder  where SellID=110054 and CreateTime>='$stime' and CreateTime<'$etime') group by A.TradeID)) B on A.TradeId=B.TradeID where SellID=110054 and CreateTime>='$stime' and CreateTime<'$etime';");
        $data=tools\ShareFun::page($data,50);//分页
        return view('test.mobile')->with('data',$data);
    }

       //导出数据excel
    public function mobile_excel(){
        //excel标题
        $GLOBALS['title']='惠付订单 '.date('Y-m-d');
        $stime=date("Y-m-d 00:00:00",strtotime("-1 day"));
        $etime=date('Y-m-d 00:00:00');

        $db=DB::connection('mysql_ali')->select("select A.Mobile,A.CreateTime,A.`Status`,A.StatusDesc,A.productSize,A.TradeId,A.SellID,A.FinishTime,B.OrderID,B.channelName,p.provinceName FROM sellorder A LEFT JOIN base_mobile_location m ON LEFT(A.Mobile,7) = m.telPrefix7 LEFT JOIN base_province p ON p.provinceId = m.provinceId LEFT JOIN (select TradeID,OrderID,channelName from  operatororder where ID in(select max(A.ID) from operatororder A where  A.TradeID in (select TradeId FROM sellorder  where SellID=110054 and CreateTime>='$stime' and CreateTime<'$etime') group by A.TradeID)) B on A.TradeId=B.TradeID where SellID=110054 and CreateTime>='$stime' and CreateTime<'$etime';");
        //object转为数组
        $db=tools\ShareFun::object_to_array($db);

       
        $data = array(
            array(' ','订购手机号码','创建时间','订单状态','状态码描述','流量规格','交易ID','渠道编号','订单完成时间','运营商订单ID','使用运营商通道','省份')
        );

        //循环拼接数据
        for($i=0;$i<count($db);$i++){
            array_push($data,array('',$db[$i]['Mobile'],$db[$i]['CreateTime'],$db[$i]['Status'],$db[$i]['StatusDesc'],$db[$i]['productSize'],$db[$i]['TradeId'],$db[$i]['SellID'],$db[$i]['FinishTime'],$db[$i]['OrderID'],$db[$i]['channelName'],$db[$i]['provinceName']));
        }
   
        Excel::create($GLOBALS['title'], function($excel) use($data) {
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->fromArray($data); 
            });
        })
        // ->export('xls');
        ->store('xls', public_path('file'));

        $mail='956149307@qq.com';
        $data='';
        TestController::email($mail,$data);

    }






}