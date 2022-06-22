<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('news.index' , compact('news'));
    }


    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {


        if($request->hasfile('news_img')){
            $path = Storage::disk('local')->put('public/news', $request->news_img);
            $path = '/'.str_replace("public","storage",$path);
        }else{
            $path = null;
        }

        News::create([
            'title' => $request->news_title,
            'content' => $request->news_content,
            'img' => $path,
        ]);

        return redirect('/news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit',compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);

        if($request->hasfile('news_img')){
            //存檔案
            $path = Storage::disk('local')->put('public/news', $request->news_img);
            $path = '/'.str_replace("public","storage",$path);

            $target = str_replace("/storage","public",$news->news_img);
            Storage::disk('local')->delete($target);

            $news->img = $path;
        }

        $news->title = $request->news_title;
        $news->content = $request->news_content;
        $news->save();
        return redirect('/news');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $target = str_replace("/storage","public",$news->img);
        Storage::disk('local')->delete($target);
        $news->delete();
        return redirect('/news');
    }
}
