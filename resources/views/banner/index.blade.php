@extends('template.template')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/cart3.css')}}">
    <link rel="stylesheet" href="{{asset('css/comment.css')}}">
    <style>
        .banner-img{
            width: 250px;
        }
    </style>
@endsection

@section('title')
    banner管理
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <div class="d-flex justify-content-between mb-4">
                <h2 class="font-weight-bold m-0">BANNER管理</h2>
                <a href="/banner/create" class="btn btn-success">新增</a>
            </div>
            <table id="banner-list" class="display">
                <thead>
                    <tr>
                        <th>圖片預覽</th>
                        <th>圖片權重</th>
                        <th>功能</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <td class="banner-img">
                                <img src="{{$banner->img_path}}" alt="" class="w-100" style="opacity: {{$banner->img_opacity}};">
                            </td>
                            <td>{{$banner->weight}}</td>
                            <td>
                                <button class="btn btn-success" onclick="location.href ='/banner/edit/{{$banner->id}}'">編輯</button>
                                <button class="btn btn-danger" onclick="location.href ='/banner/delete/{{$banner->id}}'">刪除</button>
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
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#banner-list').DataTable();
        });
    </script>
@endsection
