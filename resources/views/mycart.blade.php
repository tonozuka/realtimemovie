@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="">
    <div class="mx-auto" style="max-width: 1200px">
    <h1 style="color:#fefefe; font-size:1.2em; padding: 24px 0px;" class="text-center font-weight-bold">{{Auth::user()->name}}さんのカートの中身</h1>

      <div class="cart-body">
      <p class="text-center" style="color: #fefefe;">{{$message ?? ''}}</p><br>
        <div>
        
        @if($my_carts->isNotEmpty())

          @foreach($my_carts as $my_cart)
          <div class="mycart_box">
            <div class="movie-title">
              {{$my_cart->stock->name}} <br>
            </div>
              <div class="movie-price">
              {{number_format($my_cart->stock->fee)}}円 <br>
            </div>
              <img src="/img/{{$my_cart->stock->imgpath}}" alt="" class="incartmovie"> <br>

              <form action="/cartdelete" method="post">
              @csrf
                <input type="hidden" name="delete" value="delete">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="stock_id" value="{{$my_cart->stock->id}}">
                <input type="submit"  value="カートから削除する"
                class="deletemovie">
            </form>
          </div>
          @endforeach
        </div>
        <div class="text-center p-2">
          個数 : {{$count ?? ''}}個<br>
          <p style="font-size:1.2em; font-weight:bold;">合計金額 : {{$sum ?? ''}}円</p>
        </div>
        <form action="/checkout" method="POST">
        @csrf
          <button type="submit" class="btn btn-danger btn-lg text-center buy-btn">購入する</button>
        </form>

        @else
            <p class="text-center">カートは空っぽです。</p>
        @endif
        <a href="/">商品一覧へ</a>
      </div>
    </div>
  </div>
</div>
@endsection