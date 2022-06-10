@extends('template.template')

@section('css')
    <link rel="stylesheet" href="{{asset('css/cart4.css')}}">
@endsection

@section('title')
    cart4
@endsection

@section('main')
    <main class="d-flex justify-content-center">
        <div class="plate d-flex flex-column col-10 col-sm-9 col-md-12 col-lg-8 my-5 px-5">
            <!-- 購物車title -->
            <h2 class="font-weight-bold mt-5">購物車</h2>
            <!-- 進程 -->
            <ul class="d-flex flex-row justify-content-around list-group mt-5 position-relative">
                <li class="list-group-item rounded-circle greenProgress">1</li>
                <li class="list-group-item position-absolute lineProgress leftLine"></li>
                <li class="list-group-item rounded-circle greenProgress">2</li>
                <li class="list-group-item position-absolute lineProgress midLine"></li>
                <li class="list-group-item rounded-circle greenProgress">3</li>
                <li class="list-group-item position-absolute lineProgress rightLine"></li>
                <li class="list-group-item rounded-circle greenProgress">4</li>
            </ul>
            <ul class="d-flex flex-row justify-content-around list-group">
                <li class="stepContent list-group-item col text-center border-0">確認購物車</li>
                <li class="stepContent list-group-item col text-center border-0">付款與運送方式</li>
                <li class="stepContent list-group-item col text-center border-0">填寫資料</li>
                <li class="stepContent list-group-item col text-center border-0">完成訂購</li>
            </ul>
            <hr class="w-100">
            <!-- 訂單成立title -->
            <h1 class="mb-5 text-center font-weight-bolder">訂單成立</h1>
            <!-- 顧客選擇的清單 -->
            <h3 class="text-black-50 mb-5">訂單明細</h3>
            <div class="customerList">
                <div class="chosenCard d-flex align-items-center mb-4">
                    <div class="cardLeft d-flex align-items-center">
                        <div class="chosenImg mr-3">
                            <img src="{{asset('img/cart/taco.jpg')}}" alt="">
                        </div>
                        <div class="chosenName">
                            Chicken momo
                            <div class="chosenID text-black-50">#41551</div>
                        </div>
                    </div>
                    <div class="cardRight d-flex ml-auto">
                        x<span>1</span>
                        <div class="itemPrice ml-4">
                            ＄10.50
                        </div>
                    </div>
                </div>
                <hr class="w-100">
                <div class="chosenCard d-flex align-items-center mb-4">
                    <div class="cardLeft d-flex align-items-center">
                        <div class="chosenImg mr-3">
                            <img src="{{asset('img/cart/kare.jpg')}}" alt="">
                        </div>
                        <div class="chosenName">
                            Chicken momo
                            <div class="chosenID text-black-50">#66999</div>
                        </div>
                    </div>
                    <div class="cardRight d-flex ml-auto">
                        x<span>1</span>
                        <div class="itemPrice ml-4">
                            ＄10.50
                        </div>
                    </div>
                </div>
                <hr class="w-100">
                <div class="chosenCard d-flex align-items-center mb-4">
                    <div class="cardLeft d-flex align-items-center">
                        <div class="chosenImg mr-3">
                            <img src="{{asset('img/cart/croissant.jpg')}}" alt="">
                        </div>
                        <div class="chosenName">
                            Chicken momo
                            <div class="chosenID text-black-50">#86577</div>
                        </div>
                    </div>
                    <div class="cardRight d-flex ml-auto">
                        x<span>1</span>
                        <div class="itemPrice ml-4">
                            ＄10.50
                        </div>
                    </div>
                </div>
                <hr class="w-100">
                <div class="d-flex justify-content-end">
                    <div class="listSum d-flex flex-column col-6 col-md-4 col-lg-3 p-0">
                        <!-- 件數總計 -->
                        <div class="w-100 d-flex justify-content-between text-black-50">數量:<span
                                class="numSum font-weight-bold text-dark">3</span></div>
                        <!-- 商品價格總計 -->
                        <div class="w-100 d-flex justify-content-between text-black-50">小計:<span
                                class="priceSum font-weight-bold text-dark">＄24.90</span>
                        </div>
                        <!-- 運費 -->
                        <div class="w-100 d-flex justify-content-between text-black-50">運費:
                            <span class="deliveryCharge font-weight-bold text-dark">＄24.90</span>
                        </div>
                        <!-- 總消費 -->
                        <div class="w-100 d-flex justify-content-between text-black-50">總計:<span
                                class="allCost font-weight-bold text-dark">＄24.90</span>
                        </div>
                    </div>
                </div>
                <hr class="w-100">
                <div class="changePage d-flex align-items-center justify-content-end my-5">
                    <a class="btn btn-primary border border-primary text-white px-5 py-2" href="/"
                        role="button">返回首頁</a>
                </div>
            </div>

        </div>
    </main>
@endsection
