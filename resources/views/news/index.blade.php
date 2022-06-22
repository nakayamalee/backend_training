@extends('template.template')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/cart3.css')}}">
    <link rel="stylesheet" href="{{asset('css/comment.css')}}">
    <style>
        .news-img{
            width: 200px;
        }
    </style>
@endsection

@section('title')
    news管理
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <div class="d-flex justify-content-between mb-4">
                <h2 class="font-weight-bold m-0">NEWS管理</h2>
                <a href="/news/create" class="btn btn-success">新增</a>
            </div>
            <table id="news-list" class="display">
                <thead>
                    <tr>
                        <th>新聞標題</th>
                        <th>新聞內容</th>
                        <th>圖片</th>
                        <th>功能</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->content}}</td>
                            <td class="news-img">
                                @if ($data->img != null || $data->img != '')
                                    <img src="{{$data->img}}" alt="" class="w-100">
                                @else
                                    <p class="text-center m-0 font-weight-bold">尚未提供圖片</p>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-success" onclick="location.href ='/news/edit/{{$data->id}}'">編輯</button>
                                <button class="btn btn-danger" type="submit" onclick="document.querySelector('#delete_form{{$data->id}}').submit();">刪除</button>
                                <form action="/news/delete/{{$data->id}}" method="POST" class="d-none" id="delete_form{{$data->id}}">
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
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#news-list').DataTable();
        });
    </script>
@endsection
