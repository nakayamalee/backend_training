<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    public function save_comment(Request $request){
        DB::table('comments')->insert([
            'title' => $request->title,
            'name' => $request->user,
            'context' => $request->content,
            'email' => '',
        ]);
        return redirect('/comment');
    }
    public function delete_comment($target){
        $deleted = DB::table('comments')->where('id', $target)->delete();
        return redirect('/comment');
    }
    public function edit_comment($id){
        // $comment = DB::table('comments')->where('id',$id)->first();
        $comment = DB::table('comments')->find($id);
        // dd($comment);
        return view('comment.edit',compact('comment'));
    }
    public function update_comment(Request $request,$id){
        DB::table('comments')->where('id',$id)->update([
            'title' => $request->title,
            'name' => $request->user,
            'context' => $request->content,
            'email' => '',
        ]);
        return redirect('/comment');
    }
}
