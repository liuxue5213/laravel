<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Models;
use View;
use App\Http\Controllers\tools;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // $sid = Session::get('session_id'); 
        //全局变量  导航栏信息
        $navs = Models\Main::all()->where('type','category');
        
        // $title_three=tools\ShareFun::object_to_array($rows_nav_three);
        // View::share('sid',$sid);
        View::share('nav',$navs);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
