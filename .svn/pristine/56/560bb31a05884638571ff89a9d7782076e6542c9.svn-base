
function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
/*判断ie版本*/
function IsIEVersion() {
    var userAgentInfo = navigator.appVersion;
    if (userAgentInfo.indexOf("MSIE 6.0") > 0) {
        return 6;
    }
    if (userAgentInfo.indexOf("MSIE 7.0") > 0) {
        return 7;
    }
    if (userAgentInfo.indexOf("MSIE 8.0") > 0) {
        return 8;
    };
    if (userAgentInfo.indexOf("MSIE 9.0") > 0) {
        return 9;
    };
    return 0;
}
//获得html上的参数 para 为url key 名称
function getParam(para) {

    querystr = window.location.href.split("?");
    //alert(querystr[1]);
    var iparam = "",
        tmp_arr = [];
    if (querystr[1]) {
        var GET1s = querystr[1].split("&");
        for (i = 0; i < GET1s.length; i++) {
            tmp_arr = GET1s[i].split("=");
            if (para == tmp_arr[0]) {
                iparam = tmp_arr[1];
            }
        }
    }
    return iparam;
}
/*判断是否是邮箱的格式 b 为string*/
function IsEmail(b) {
    var a = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if (!a.exec(b)) {
        return false
    }
    return true
}
function isMobile(phone){
    var reg = /^1[3,5,8]{1}[0-9]{1}[0-9]{8}$/;
    if (reg.test(phone)) {
        return true;
    }
    else {
        return false;
    }
}
var Cookie = {
    SetCookie:function(name,value,expires,path){var expdate=new Date();expdate.setTime(expdate.getTime()+(expires*1000));document.cookie=prefix+name+"="+escape(value)+"; expires="+expdate.toGMTString()+
        ( ( path ) ? ";path=" + path : "" )},
    GetCookie:function(name){var arg=prefix+name+"=";var alen=arg.length;var clen=document.cookie.length;var i=0;while(i<clen){var j=i+alen;if(document.cookie.substring(i,j)==arg)return this.GetCookieVal(j);i=document.cookie.indexOf(" ",i)+1;if(i==0)break};return""},
    GetCookieVal:function(offset){var endstr=document.cookie.indexOf(";",offset);if(endstr==-1){endstr=document.cookie.length};return unescape(document.cookie.substring(offset,endstr))},
    IsEmail:function(strg){var patrn=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;if(!patrn.exec(strg))return false;return true}
}
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {WeixinJSBridge.call('hideToolbar'); setTimeout(function(){init();weiXinFollow();},200)});

var Base = {
    //公共类的获得
    cid: function() {
        return Cookie.GetCookie("cid");
    },
    store_id: function() {
        return Cookie.GetCookie("store_id");
    },
    user_id: function() {
        var user_id = Cookie.GetCookie("user_id")
        return user_id;
    },
    All: function() {
        return {
            "store_id": this.store_id(),
            "user_id": this.user_id(),
            "cid": this.cid()
        }
    }
}
$(function(){
    $('.leftbars h4').click(function(){
        var i_class = $(this).find('i').attr('class');
        if(i_class=="icon-remove"){
            $(this).find('i').removeClass('icon-remove').addClass('icon-add');
            $(this).siblings('ul').slideUp();
        }else{
            $(this).find('i').removeClass('icon-add').addClass('icon-remove');
            $(this).siblings('ul').slideDown();
        }
    });

    $('.nav li').hover(function(){
        $(this).find('.nav_list').show();
    },function(){
        $('.nav li .nav_list').hide();
    })
    $('.nav_list').each(function(){
        $(this).find('dt:first').css('margin-top',0).css('border','none');
    })
    $('.nav_list').hover(function(){
    	$(this).closest('li').addClass('hover');
    },function(){
    	$('.nav li').removeClass('hover');
    })
    $('.userSiteTabs li').click(function(){
        $(this).addClass('cur').siblings().removeClass('cur');
        $('.userSitePanes .userSitePane').eq($(this).index()).show().siblings().hide();
    });
})


$(function(){
    //select 防
    $('.select-text').click(function(event){
        event.stopPropagation();
        $(this).siblings('.select-list').slideDown();
    });
    $('.select-list a').click(function(){
        $(this).closest('.select-list').siblings('.select-text').html($(this).html()+'<i class="icon-triangle"></i>');
    });

    $('body').click(function(){
        $('.select-list').slideUp();
    })
})
/**
 * 获取字节长度
 */
function getBytesCount(s) {
    var totalLength = 0;
    var i;
    var charCode;
    for (i = 0; i < s.length; i++) {
        charCode = s.charCodeAt(i);
        if (charCode < 0x007f) {
            totalLength = totalLength + 1;
        } else if ((0x0080 <= charCode) && (charCode <= 0x07ff)) {
            totalLength += 2;
        } else if ((0x0800 <= charCode) && (charCode <= 0xffff)) {
            totalLength += 3;
        }
    }
    return totalLength;
}
/**
 * 验证手机号码,电话号码格式
 */
function isMobile(mobile)
{
    var re = /^(1[3,5,8,7]{1}[\d]{9})|(((400)-(\d{3})-(\d{4}))|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{3,7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)$/;
    if (!re.test(mobile)) {
        return false;
    }
    return true;
}

