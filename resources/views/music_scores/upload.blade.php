@php
    $title = __('Musics');
@endphp
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CSVアップロード</div>

                <div class="card-body">
                  <form action="save_score" method="post" enctype="multipart/form-data" id="csvUpload">
                  <div class="form-group">
                      <input type="file" value="ファイルを選択" name="csv_file">
                  </div>
                  {{ csrf_field() }}
                  <div class="form-group">
                      <button type="submit">アップロードする</button>
                  </div>
                  <div><a href="{{ url('csv_sample') }}">csvサンプル</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
