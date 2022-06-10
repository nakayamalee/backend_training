<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    //
    public function index(){
        //取前三筆
        // $data = DB::table('news')->take(3)->get();

        //取後三筆
        // $data = DB::table('news')->skip(2)->take(3)->get();

        //隨機取三筆
        // $data = DB::table('news')->inRandomOrder()->take(3)->get();
        dd($data);
        return view('shopping.home-page');
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
