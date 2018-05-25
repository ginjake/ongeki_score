@php
    $title = __('Musics');
@endphp
@extends('layouts.app')
@section('content')
<h1>CSVアップロード</h1>
<div class="table-responsive">
  <form action="save_score" method="post" enctype="multipart/form-data" id="csvUpload">
  <input type="file" value="ファイルを選択" name="csv_file">
  {{ csrf_field() }}
  <button type="submit">インポート</button>
</div>
@endsection