@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="">
    <div class="mx-auto" style="max-width: 1200px;">
      <h1 class="text-center font-weight-bold" style="color: #fefefe; font-size:1.2em; padding: 24px 0px;">
      {{Auth::user()->name}}さんご購入ありがとうございました
      </h1>
      <div class="card-body">
        <p>ご登録いただいたメールアドレスへ決済情報をお送りしております。お手続き完了次第発送いたします。</p>
        <a href="/">商品一覧へ</a>
      </div>
    </div>
  </div>
</div>
@endsection