@php
    $title = __('Musics');
@endphp
@extends('layouts.app')
@section('content')
<h1>スコア</h1>
<div class="table-responsive">
  {{$user->name}}さんのデータ
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('曲名') }}</th>
                <th>{{ __('難易度') }}</th>
                <th>{{ __('レベル') }}</th>
                <th>{{ __('スコア') }}</th>
                <th>{{ __('クリア') }}</th>
                <th>{{ __('作曲者') }}</th>
                <th>{{ __('ノーツデザイナー') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scores as $score)
                <tr>
                    <td>{{ $score->id }}</td>
                    <td>{{ $score->name }}</td>
                    <td>
                      {{$score->difficult_name}}
                    </td>
                    <td>{{ $score->level }}</td>
                    <td>{{ $score->score }}</td>
                    <td>{{ $score->clear }}</td>
                    <td>{{ $score->artist }}</td>
                    <td>{{ $score->notes_designer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection