@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">使い方</div>

                <div class="card-body">
                  <ul>
                  <li>オンゲキのサイトで課金してコースに入る</li>
                  <li>オンゲキのサイトにログインし、Aimeを選んだ状態にしておく。</li>
                  <li>スコアツールに戻り、右上から新規登録、ログイン</li>
                  <li><a id="result_anchor" href="javascript:if(location.href.indexOf('https://ongeki-net.com/ongeki-mobile/') == 0){$.getScript('//www.ginjake.net/ongeki/public/js/ongeki_score.js')}else{location.href = 'https://ongeki-net.com/ongeki-mobile/home/'};">オンゲキブックマークレット</a>登録<br>
                (ブックマークレットの登録方法は<a href="http://book.tsuhankensaku.com/hon/bookmarklet-googlechrome.html">こちら(外部ページ)</a>)</li>
                  <li>オンゲキのサイト上でブックマークレットをクリック。</li>
                  <li>しばらくするとcsvがダウンロードされるので、<a href="{{ url('upload') }}">ここから</a>アップロードする</li>
                  <li>"https://www.ginjake.net/ongeki/?user=(ユーザー名)"にアクセス</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">更新履歴</div>
                <div class="card-body">
                  <div>07/27 6:24 β版公開</div>
                  <div>07/30 jsをブックマークレット化。readme修正</div>
                  <div>09/20 Lunatic対応。cielavenirさんありがとうございます。</div>
                  <div>09/21 ブックマークレットの使い方を補足</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
