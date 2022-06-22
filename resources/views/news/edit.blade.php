@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    <style>
        .news-img{
            max-width: 300px;
        }
    </style>
@endsection

@section('title')
    news管理-編輯頁
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <h2 class="font-weight-bold">news編輯</h2>

            <form action="/news/update/{{$news->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="write d-flex flex-column">
                    <div class="my-4 d-flex flex-column">
                        <label for="news_title">新聞標題:</label>
                        <input type="text" name="news_title" id="news_title" class="border" value="{{$news->title}}" required>
                    </div>
                    <div class="my-4 d-flex flex-column">
                        <label for="news_content">新聞內容:</label>
                        <input type="text" name="news_content" id="news_content" class="border" value="{{$news->content}}" required>
                    </div>
                    <div class="my-4 d-flex flex-column">
                        @if ($news->img != null || $news->img != '')
                            <p class="m-0">目前的圖片:</p>
                            <img src="{{$news->img}}" class="news-img w-100" alt="">
                        @else
                            <p class="text-center font-weight-bold" style="font-size: 32px">尚未提供圖片</p>
                        @endif
                        <label for="news_img">新聞圖片上傳:</label>
                        <input type="file" name="news_img" id="news_img" class="border">
                    </div>

                    <div class="action">
                        <button class="btn btn-danger" type="reset" onclick="location.href ='/news'">取消</button>
                        <button class="btn btn-primary" type="submit">變更</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
