@extends('shopping.template')

@section('css')
    <link rel="stylesheet" href="{{asset('css/cart3.css')}}">
@endsection

@section('title')
    cart3
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
            <h2 class="mb-3">寄送資料</h2>
            <!-- 顧客選擇的清單 -->
            <form action="/shopping4">
                <div class="d-flex flex-column mb-5">
                    <div class="input-group flex-nowrap flex-column">
                        <label for="name">姓名</label>
                        <input type="text" name="username" id="name" class="form-control w-100 mb-3" placeholder="王小明">
                        <label for="phone">電話</label>
                        <input type="text" name="tel" id="phone" class="form-control w-100 mb-3" placeholder="0912345678">
                        <label for="mail">Email</label>
                        <input type="email" name="email" id="mail" class="form-control w-100 mb-3"
                            placeholder="abc123@gmail.com">
                        <label for="cityAddress">地址</label>
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <input type="text" name="city" id="cityAddress" class="form-control mr-auto" placeholder="城市">
                        <input type="text" name="cityNumber" class="form-control" placeholder="郵遞區號">
                    </div>
                    <input type="text" name="address" class="form-control w-100" placeholder="地址">
                </div>
                <hr class="w-100">

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
                    <a class="btn btn-light border border-primary text-primary px-5 py-2" href="/shopping2"
                        role="button">上一步</a>
                    <input class="btn btn-primary px-5 py-2" type="submit" value="下一步">
                </div>
            </form>
        </div>
    </main>
@endsection
