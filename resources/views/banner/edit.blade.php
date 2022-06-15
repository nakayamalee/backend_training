@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    <style>
        .write img{
            width: 100%;
            max-width: 400px;
        }
    </style>
@endsection

@section('title')
    banner管理-編輯頁
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <h2 class="font-weight-bold">BANNER編輯</h2>
            <form action="/banner/update/{{$banner->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="write d-flex flex-column">
                    <div class="my-4 d-flex flex-column">
                        <div>當前圖片:</div>
                        <img src="{{$banner->img_path}}" style="opacity:{{$banner->img_opacity}};" alt="">
                        <label for="img_banner">BANNER圖片上傳:</label>
                        <input type="file" name="img_banner" id="img_banner" class="border">
                        <input type="hidden" name = "origin_img" value="{{$banner->img_path}}">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="img_opacity">透明度設定:</label>
                        <input type="text" name="img_opacity" id="img_opacity" class="border" value="{{$banner->img_opacity}}">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="img_weight">權重設定:</label>
                        <input type="number" name="img_weight" id="img_weight" class="border" value="{{$banner->weight}}">
                    </div>

                    <div class="action">
                        <button class="btn btn-danger" type="reset" onclick="location.href ='/banner'">取消</button>
                        <button class="btn btn-primary" type="submit">修改banner</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
