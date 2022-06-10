<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    //
    public function index(){
        //取最舊三筆
        // $data1 = DB::table('news')->take(3)->get();

        //取最新三筆
        $data2 = DB::table('news')->orderBy('id','desc')->take(3)->get();

        //隨機取三筆
        // $data3 = DB::table('news')->inRandomOrder()->take(3)->get();
        // dd($data2[0]);
        return view('shopping.home-page',compact('data2'));

    }
    public function step1(){
        return view('shopping.cart1');
    }
    public function step2(){
        return view('shopping.cart2');
    }
    public function step3(){
        return view('shopping.cart3');
    }
    public function step4(){
        return view('shopping.cart4');
    }
}
