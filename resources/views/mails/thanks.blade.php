@component('mail::message')

{{$user}}様<br>
この度はRealtimeMovieでのご購入ありがとうございます。<br>

お客様が購入した商品は<br>

@foreach ($checkout_items as $item)・{{$item->stock->name}} | ¥{{$item->stock->fee}}<br>
@endforeach

となります。<br>

下記の決済画面より決済を完了させてください。（ごめんなさい決済機能は実装していません。）<br>

@component('mail::button', ['url' => ''])
決済画面へ
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
