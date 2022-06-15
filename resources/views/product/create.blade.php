@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('title')
    商品管理-新增頁
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <h2 class="font-weight-bold">商品新增</h2>

            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="write d-flex flex-column">
                    <div class="my-4 d-flex flex-column">
                        <label for="product_img">商品圖片上傳:</label>
                        <input type="file" name="product_img" id="product_img" class="border" required>
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="product_name">商品名稱:</label>
                        <input type="text" name="product_name" id="product_name" class="border">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="product_price">商品價格:</label>
                        <input type="number" name="product_price" id="product_price" class="border">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="product_detail">商品詳情:</label>
                        <input type="text" name="product_detail" id="product_detail" class="border">
                    </div>

                    <div class="my-4 d-flex flex-column">
                        <label for="product_qty">商品數量:</label>
                        <input type="number" name="product_qty" id="product_qty" class="border">
                    </div>

                    <div class="action">
                        <button class="btn btn-danger" type="reset" onclick="location.href =''">取消</button>
                        <button class="btn btn-primary" type="submit">新增商品</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
