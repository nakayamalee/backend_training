@extends('shopping.template')

@section('css')
    <link rel="stylesheet" href="{{asset('css/cart2.css')}}">
@endsection

@section('title')
    cart2
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
                <li class="list-group-item rounded-circle">3</li>
                <li class="list-group-item position-absolute lineProgress rightLine"></li>
                <li class="list-group-item rounded-circle">4</li>
            </ul>
            <ul class="d-flex flex-row justify-content-around list-group">
                <li class="stepContent list-group-item col text-center border-0">確認購物車</li>
                <li class="stepContent list-group-item col text-center border-0">付款與運送方式</li>
                <li class="stepContent list-group-item col text-center border-0">填寫資料</li>
                <li class="stepContent list-group-item col text-center border-0">完成訂購</li>
            </ul>
            <hr class="w-100">
            <!-- 付款明細title -->
            <h3 class="mb-5">付款方式</h3>
            <!-- 顧客選擇的清單 -->
            <form action="/shopping3">
                <div class="d-flex flex-column ml-5 mb-5">
                    <label for="" class="d-flex align-items-center">
                        <input type="radio" name="pay" id="" class="mr-1">
                        信用卡付款
                    </label>
                    <hr class="w-100">
                    <label for="" class="d-flex align-items-center">
                        <input type="radio" name="pay" id="" class="mr-1">
                        網路 ATM
                    </label>
                    <hr class="w-100">
                    <label for="" class="d-flex align-items-center">
                        <input type="radio" name="pay" id="" class="mr-1">
                        超商代碼
                    </label>
                </div>
                <hr class="w-100">
                <h3 class="mb-5">運送方式</h3>
                <div class="d-flex flex-column ml-5 mb-5">
                    <label for="" class="d-flex align-items-center">
                        <input type="radio" name="delivery" id="" class="mr-1">
                        黑貓宅配
                    </label>
                    <hr class="w-100">
                    <label for="" class="d-flex align-items-center">
                        <input type="radio" name="delivery" id="" class="mr-1">
                        超商店到店
                    </label>
                    <hr class="w-100">
                </div>
                <!-- 清單結算 -->
                <div class="d-flex justify-content-end">
                    <div class="listSum d-flex flex-column col-6 col-md-4 col-lg-3">
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
                <div class="changePage d-flex align-items-center justify-content-between my-5">
                    <a class="btn btn-light border border-primary text-primary px-5 py-2" href="/shopping1"
                        role="button">上一步</a>
                    <input class="btn btn-primary px-5 py-2" type="submit" value="下一步">
                </div>
            </form>
        </div>
    </main>
@endsection
