@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('title')
    banner管理-新增頁
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <h2 class="font-weight-bold">BANNER新增</h2>

            <form action="/banner/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="write d-flex flex-column">
                    <div class="my-4 d-flex flex-column">
                        <label for="img_banner">BANNER圖片上傳:</label>
                        <input type="file" name="img_banner" id="img_banner" class="border">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="img_opacity">透明度設定:</label>
                        <input type="text" name="img_opacity" id="img_opacity" class="border">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="img_weight">權重設定:</label>
                        <input type="number" name="img_weight" id="img_weight" class="border">
                    </div>

                    <div class="action">
                        <button class="btn btn-danger" type="reset" onclick="location.href ='/banner'">取消</button>
                        <button class="btn btn-primary" type="submit">新增</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
