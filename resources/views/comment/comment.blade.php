@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{asset('css/cart3.css')}}">
    <link rel="stylesheet" href="{{asset('css/comment.css')}}">
@endsection

@section('title')
    comment
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 p-5">
            <h2 class="font-weight-bold">留言板</h2>

            <div class="comment">
                <div class="user-info">
                    <div class="title">Title:

                    </div>
                    <div class="user">Comment by:

                    </div>
                    <div class="time-stamp">Comment time:

                    </div>
                </div>
                <div class="content">

                </div>
            </div>

            <form action="/comment/save" method="GET">
                <div class="comment write">
                    <div class="user-info">
                        <div class="title">Title:
                            <input class="title-input" type="text" maxlength="8" name="title">
                        </div>
                        <div class="user">name:
                            <input class="user-input" type="text" maxlength="10" name="user">
                        </div>
                    </div>
                    <textarea name="content" id="content-textarea" cols="30" rows="10"></textarea>
                    <div class="action">
                        <button class="btn btn-danger" type="reset">清除留言</button>
                        <button class="btn btn-primary" type="submit">送出留言</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection