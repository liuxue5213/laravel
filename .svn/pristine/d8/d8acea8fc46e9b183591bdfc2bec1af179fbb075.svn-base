<?php

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controllers( [
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
 ]);


//所有admin路由
Route::group(['prefix' => 'admin','namespace'=>'\Admin'], function (){
    //首页 控制台
    Route::get('/','AdminController@index');

    //主页
    Route::group(['prefix'=>'home'],function(){
        Route::get('/','HomeController@index');
        // Route::post('/save','HomeController@save');
        // Route::resource('/', 'AboutController');
    });
    
    //个人信息介绍
    Route::group(['prefix'=>'about'],function(){
        Route::get('/','AboutController@index');
        Route::post('/save','AboutController@save');
        // Route::resource('/', 'AboutController');
    });


    //电子邮箱
    Route::group(['prefix'=>'email'],function(){
        Route::get('/','EmailController@index');
        // Route::post('/save','EmailController@save');
        // Route::resource('/', 'AboutController');
    });

    //博客 微博
    Route::group(['prefix'=>'weibo'],function(){
        Route::get('/','WeiboController@index');

        // Route::post('/save','WeiboController@save');
        // Route::resource('/', 'AboutController');
    });


    //音乐
    Route::group(['prefix'=>'music'],function(){
        Route::get('/','MusicController@index');
        // Route::post('/save','WeiboController@save');
        // Route::resource('/', 'AboutController');
    });

    //聊天室
    Route::group(['prefix'=>'talking'],function(){
        Route::get('/','TalkingController@index');
        // Route::post('/save','WeiboController@save');
        // Route::resource('/', 'AboutController');
    });

    //系统设置
    Route::group(['prefix'=>'setting'],function(){
        Route::get('/','SettingController@index');
        // Route::post('/save','WeiboController@save');
        // Route::resource('/', 'AboutController');
    });


    // Route::any('/main','MainController@index');
    // Route::group(['prefix'=>'Guest','namespace'=>'\Guest'],function(){
    //     Route::get('/','GuestController@index');
    // });

});

Queue::pushOn('/queue_mail', new \App\Commands\SendEmail());

Route::get('/weibo/show','Admin\WeiboController@show');
Route::get('/weibo/show/{id}','Admin\WeiboController@show_id');
Route::post('/music/search','Admin\MusicController@search');


//主页
Route::get('/','Index\IndexController@index');
Route::get('/home','Index\IndexController@index');
Route::get('/home/{user_id}','Index\IndexController@index_id');
//nav导航 
Route::get('/{nav}','Index\IndexController@nav_index');
Route::get('/{nav}/{user_id}','Index\IndexController@nav_id');







//测试  工作上的小查询
// Route::get('/test','TestController@index');
// Route::get('/test/excel','TestController@excel');
// Route::get('/test/mobile','TestController@mobile');
// Route::get('/test/mobile/excel','TestController@mobile_excel');
