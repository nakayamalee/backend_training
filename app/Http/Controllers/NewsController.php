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
        
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
