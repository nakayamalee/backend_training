<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShoppingCartController extends Controller
{

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
    public function comment(){
        return view('comment.comment');
    }
    public function save_comment(Request $request){
        dd($request->all());
    }

}
