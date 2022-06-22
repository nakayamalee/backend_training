@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('title')
    news管理-新增頁
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <h2 class="font-weight-bold">news新增</h2>

            <form action="/news/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="write d-flex flex-column">
                    <div class="my-4 d-flex flex-column">
                        <label for="news_title">新聞標題:</label>
                        <input type="text" name="news_title" id="news_title" class="border" required>
                    </div>
                    <div class="my-4 d-flex flex-column">
                        <label for="news_content">新聞內容:</label>
                        <input type="text" name="news_content" id="news_content" class="border" required>
                    </div>
                    <div class="my-4 d-flex flex-column">
                        <label for="news_img">新聞圖片上傳:</label>
                        <input type="file" name="news_img" id="news_img" class="border">
                    </div>

                    <div class="action">
                        <button class="btn btn-danger" type="reset" onclick="location.href ='/news'">取消</button>
                        <button class="btn btn-primary" type="submit">新增</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
