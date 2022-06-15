@extends('template.template')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/cart3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
    <style>
        .banner-img {
            width: 250px;
        }
    </style>
@endsection

@section('title')
    商品管理
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <div class="d-flex justify-content-between mb-4">
                <h2 class="font-weight-bold m-0">商品管理</h2>
                <a href="/product/create" class="btn btn-success">新增商品</a>
            </div>
            <table id="product-list" class="display">
                <thead>
                    <tr>
                        <th>商品圖片</th>
                        <th>商品名稱</th>
                        <th>商品價格</th>
                        <th>商品描述</th>
                        <th>商品數量</th>
                        <th>功能</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="banner-img">
                                <img src="{{$product->img_path}}" alt="" class="w-100">
                            </td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->product_detail}}</td>
                            <td>{{$product->product_qty}}</td>
                            <td>
                                <button class="btn btn-success"
                                    onclick="location.href ='/product/edit/{{$product->id}}'">編輯</button>
                                <button class="btn btn-danger" type="submit"
                                    onclick="document.querySelector('#delete_form{{$product->id}}').submit();">刪除</button>
                                <form action="/product/delete/{{$product->id}}" method="POST" class="d-none" id="delete_form{{$product->id}}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#product-list').DataTable();
        });
    </script>
@endsection
