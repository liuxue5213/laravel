<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\tools;

class HomeController extends Controller
{
    public function index(){
        // return 'about';
     return view('admin.home.index')->with('nav_class','start active');
    }


}