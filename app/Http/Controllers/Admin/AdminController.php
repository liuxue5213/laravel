<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\tools;
// use Mail;
use Excel;
// use Redis;

class AdminController extends Controller
{
    public function index(){
        
        
        return view('admin.index')->with('name','liuxue');
    }


}