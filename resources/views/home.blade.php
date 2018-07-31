@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">オンゲキスコアツール(β)へようこそ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    このツールは非公式ツールです
                    <div><a href="{{ url('upload') }}">スコアをアップロード</a></div>
                    <div><a href="{{ url('?user='.\Auth::user()['name']) }}">スコアを見る</a></div>
                    <div><a href="{{ url('api') }}">api(途中)</a></div>
                    <div><a href="{{ url('readme') }}">使い方</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
