
function getorderlist(member_id,status,id)
{
    var jsonarr = JSON.stringify({
        base : Base.All(),
        data : {
            id:member_id,
            type:'order',
            status:status
        },
        route : 'wuadian_cms_vip_detail',
        isroute : "0",
        isrows : "1"
    })
    $('#'+id).datagrid({
        height:350,
        url : url,
        method : "get",
        queryParams : {
            json : jsonarr
        },
		border:false,
        pageSize : 20,
        pageNumber : 1,
        pagination:true,
			nowrap: false,
        columns:[[

            {title:'订单号',field:'order_code',width:percentWidth(0.2,"orderdiv1"),formatter:function(value,row,index){
                var a='<a onclick="toOrderInfo(\'../order/orderInfo.php?order_id='+row.order_id+'&order_type='+row.order_type+'\')"  href="javascript:void(0)">'+value+'</a>';
                return a;
            }},
           {title:'状态',field:'status',width:percentWidth(0.1,"orderdiv1"),formatter:function(value,row,index){
                var ival = '';
                if(value==1){
                    ival ='未支付';
                }else if(value==2){
                    ival = '确认中';
                }
                else if(value==3){
                    ival = '已支付';
                }
                else if(value==4){
                    ival = '已确认';
                }
                else if(value==5){
                    ival = '出库中';
                }
                else if(value==6){
                    ival = '已出库';
                }else if(value==7){
                    ival = '配送中';
                }else{
                    ival = '已完成';
                }
                return ival;
            }},
            {title:'下单时间',field:'order_date',width:percentWidth(0.2,"orderdiv1")},
            {title:'门店名称',field:'store_name',width:percentWidth(0.25,"orderdiv1"),formatter:function(value,row,index){
                if(value.length >10){
                    value = value.substring(0,10)+"...";
                }
                var a='<a href="../store/storeDetail.php?store_id='+row.store_id+'">'+value+'</a>';
                return a;
            }},
            {title:'数量',field:'num',width:percentWidth(0.05,"orderdiv1")},
            {title:'订单类型',field:'order_type',width:percentWidth(0.15,"orderdiv1"),formatter:function(value,row,index){
                if(value==2){
                    value ='到店体验';
                }
                else
                {
                    value="在线订单";
                }
                return value;
            }},
        ]]
    });
}
function getCartList(member_id,type,idindex)
{
        var jsonarr = JSON.stringify({
            base : Base.All(),
            data :{
                id:member_id,
                cart_type:type,
                type:'cart',
            },
            route : 'wuadian_cms_vip_detail',
                isroute : "0",
                isrows : "1"
            })
        $('#'+idindex).datagrid({
            height:350,
            url : url,
            method : "get",
            queryParams : {
                json : jsonarr
            },
				nowrap: false,
			border:false,
            pageSize : 20,
            pageNumber : 1,
            pagination:true,
            columns:[[
                {title:'商品名称',field:'product_name',width:percentWidth(0.4,"cartdiv1"),formatter:function(value,row,index){
                    var ival = '';
                    if(value.length >31){
                        ival = value.substring(0,31)+"...";
                    }else{
                        ival = value;
                    }
                    var a='<a href="../product/productDetail.php?pid='+row.pid+'">'+ival+'</a>';
                    return a;
                }},
                {title:'数量',field:'cart_num',width:percentWidth(0.1,"cartdiv1")},
                {title:'会员价(元)',field:'member_product_price',width:percentWidth(0.14,"cartdiv1")},
                {title:'原价(元)',field:'base_product_price',width:percentWidth(0.15,"cartdiv1")},
                {title:'添加时间',field:'add_to_cart_datetime',width:percentWidth(0.2,"cartdiv1"),sortable:true}
            ]]
        });
}
function getFavList(member_id)
{
    var jsonarr = JSON.stringify({
        base : Base.All(),
        data : {
                id:member_id,
                type:"favorites",
        },
        route : 'wuadian_cms_vip_detail',
            isroute : "0",
            isrows : "1"
        })
        $("#shoucangid").datagrid({
            url : url,
            method : "get",
            queryParams : {
                json : jsonarr
            },
			border:false,
            pageSize : 20,
            pageNumber : 1,
				nowrap: false,
            columns:[[
                {title:'商品名称',field:'product_name',width:percentWidth(0.4,"FavDiv1"),formatter:function(value,row,index){
                    var ival = '';
                    if(value.length >36){
                        ival = value.substring(0,36)+"...";
                    }else{
                        ival = value;
                    }
                    var a='<a href="../product/productDetail.php?pid='+row.pid+'">'+ival+'</a>';
                    return a;
                }},
                {title:"会员价(元)",field:'member_product_price',width:percentWidth(0.15,"FavDiv1")},
                {title:"原价(元)",field:'base_product_price',width:percentWidth(0.15,"FavDiv1")},
                {title:"收藏时间",field:'time',width:percentWidth(0.22,"FavDiv1")}
            ]]
        });
}

function getHisList(member_id)
{
    var jsonarr = JSON.stringify({
        base : Base.All(),
        data : {
            id:member_id,
            type:"browsehistory",
        },
        route : 'wuadian_cms_vip_detail',
        isroute : "0",
        isrows : "1"
    })
    $("#liulanid").datagrid({
        url : url,
        method : "get",
        queryParams : {
            json : jsonarr
        },
        pageSize : 20,
		border:false,
        pageNumber : 1,
			nowrap: false,
        columns:[[
            {title:'商品名称',field:'product_name',width:percentWidth(0.4,"liulanDiv1"),formatter:function(value,row,index){
                var ival = '';
                if(value.length >36){
                    ival = value.substring(0,36)+"...";
                }else{
                    ival = value;
                }
                var a='<a href="../product/productDetail.php?pid='+row.pid+'">'+ival+'</a>';
                return a;
            }},
            {title:"会员价(元)",field:'member_product_price',width:percentWidth(0.15,"liulanDiv1")},
            {title:"原价(元)",field:'base_product_price',width:percentWidth(0.15,"liulanDiv1")},
            {title:"浏览时间",field:'time',width:percentWidth(0.22,"liulanDiv1")}
        ]]
    });
}
//获取周统计信息
function getVipWeekAnalysis()
{
    var jsonarr = {
        json: JSON.stringify({
            base: Base.All(),
            data: {
                month:'',
                type:'getweek'
            },
            route: 'wuadian_cms_vip_analysis',
            isroute: "0",
            isrows: "1"
        })
    }
    $.ajax({
        type: 'post',
        url: url,
        data: jsonarr,
        timeout: 90000,
        cache: false,
        dataType: 'json',
        success: function (o) {
            VipAnalysis("weekid",o.data.days,o.data.member,o.data.delmember,o.data.num,o.data.bmember);
        }
    })
}
//获取月统计信息
function getVipMonthAnalysis(month)
{
    var jsonarr = {
        json: JSON.stringify({
            base: Base.All(),
            data: {
                month:month,
                type:'getmonth'
            },
            route: 'wuadian_cms_vip_analysis',
            isroute: "0",
            isrows: "1"
        })
    }
    $.ajax({
        type: 'post',
        url: url,
        data: jsonarr,
        timeout: 90000,
        cache: false,
        dataType: 'json',
        success: function (o) {
            VipAnalysis("monthid", o.data.days,o.data.member,o.data.delmember,o.data.num,o.data.bmember);
        }
    })
}
//会员统计信息
function VipAnalysis(tabid,days,member,delmember,nums,bmember)
{
    var myChart = require('echarts').init(document.getElementById(tabid));
    myChart.setOption(
        {
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                orient: 'horizontal', // 'vertical'
                data:['新关注人数','取消关注人数','净增关注人数','游客数']
            },
            toolbox: {
                show : true,
                feature : {
                    dataView : false,
                    restore : false,
                    magicType:['line', 'bar'],
                    saveAsImage : true
                }
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data: (function(){
                        var res = [];
                        var day=days.split(",");
                        var i=0;
                        while (day[i]) {
                            res.push( day[i]);
                            i++;
                        }
                        return res;
                    })()
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'新关注人数',
                    type:'line',
                    smooth:true,
                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                    data:(function(){
                        var res = [];
                        var day=member.split(",");
                        var i=0;
                        while (day[i]) {
                            res.push( day[i]);
                            i++;
                        }
                        return res;
                    })()
                },
                {
                    name:'取消关注人数',
                    type:'line',
                    smooth:true,
                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                    data:(function(){
                        var res = [];
                        var day=delmember.split(",");
                        var i=0;
                        while (day[i]) {
                            res.push( day[i]);
                            i++;
                        }
                        return res;
                    })()
                },
                {
                    name:'净增关注人数',
                    type:'line',
                    smooth:true,
                    itemStyle: {normal: {areaStyle: {type: 'default'}}},
                    data:(function(){
                        var res = [];
                        var day=nums.split(",");
                        var i=0;
                        while (day[i]) {
                            res.push( day[i]);
                            i++;
                        }
                        return res;
                    })()
                },
                 {
                     name:'游客数',
                     type:'line',
                     smooth:true,
                     itemStyle: {normal: {areaStyle: {type: 'default'}}},
                     data:(function(){
                         var res = [];
                         var day=bmember.split(",");
                         var i=0;
                         while (day[i]) {
                             res.push( day[i]);
                             i++;
                         }
                         return res;
                     })()
                 }
            ]
        })
}
function toOrderInfo(url){
    //window.location=url+"&tabIndex="+getTabSelectedIndex();
    orderInfoWindow = window.open(url+"&tabIndex=0&isopen=0",'订单详细','width='+(window.screen.availWidth-250)+',height='+(window.screen.availHeight-200)+ ',resizable=no,status=no,menubar=no,scrollbars=yes,directories=no,alwaysRaised=yes,depended=yes,location=no,screenX=150,screenY=150');
    //window.open (url+"&tabIndex="+getTabSelectedIndex(), "_blank", "height=100, width=400, toolbar= no, menubar=no, scrollbars=no, resizable=no, location=no, status=no,top=100,left=300")
}