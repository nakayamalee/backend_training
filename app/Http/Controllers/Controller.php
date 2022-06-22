<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Banner;
use App\Models\News;
use App\Models\Product;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        //取最舊三筆
        // $data1 = DB::table('news')->take(3)->get();

        //取最新三筆
        // $newses = News::orderBy('id','desc')->take(3)->get();
        //隨機取三筆
        // $data3 = DB::table('news')->inRandomOrder()->take(3)->get();
        // dd($data2[0]);
        $newses = News::inRandomOrder()->take(3)->get();

        $banners = Banner::orderBy('weight','desc')->get();

        $products = Product::orderBy('id','desc')->take(8)->get();

        return view('home-page',compact('newses','banners','products'));
    }

    public function login(){
        return view('sign-in');
    }

    public function comment(){
        // $comments = DB::table('comments')->orderBy('id','desc')->get();

        $comments = Comment::orderBy('id','desc')->get();
        return view('comment.comment',compact('comments'));
    }

    public function save_comment(Request $request){
        // DB::table('comments')->insert([
        //     'title' => $request->title,
        //     'name' => $request->user,
        //     'context' => $request->content,
        //     'email' => '',
        // ]);
        Comment::create([
            'title' => $request->title,
            'name' => $request->user,
            'context' => $request->content,
            'email' => '',
        ]);;
        return redirect('/comment');
    }

    public function delete_comment($target){
        $deleted = Comment::where('id', $target)->delete();
        return redirect('/comment');
    }

    public function edit_comment($id){
        // $comment = DB::table('comments')->where('id',$id)->first();
        $comment = Comment::find($id);
        // dd($comment);
        return view('comment.edit',compact('comment'));
    }

    public function update_comment(Request $request,$id){
        Comment::where('id',$id)->update([
            'title' => $request->title,
            'name' => $request->user,
            'context' => $request->content,
            'email' => '',
        ]);
        return redirect('/comment');
    }
}
