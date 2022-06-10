<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        //取最舊三筆
        // $data1 = DB::table('news')->take(3)->get();

        //取最新三筆
        $newses = DB::table('news')->orderBy('id','desc')->take(3)->get();

        //隨機取三筆
        // $data3 = DB::table('news')->inRandomOrder()->take(3)->get();
        // dd($data2[0]);
        return view('home-page',compact('newses'));
    }
    public function login(){
        return view('sign_in');
    }
}
