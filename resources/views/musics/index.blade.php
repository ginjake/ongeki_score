@php
    $title = __('Musics');
@endphp
@extends('layouts.app')
@section('content')
<h1>音楽リスト</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('artist') }}</th>
                <th>{{ __('difficult') }}</th>
                <th>{{ __('level') }}</th>
                <th>{{ __('notes_designer') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musics as $music)
                <tr>
                    <td>{{ $music->id }}</td>
                    <td>{{ $music->name }}</td>
                    <td>{{ $music->artist }}</td>
                    <td>
                      @if (!empty($difficulies[$music->difficulty_id]))
                          {{$difficulies[$music->difficulty_id]["name"]}}
                      @else
                          {{"不明"}}
                      @endif
                    </td>
                    <td>{{ $music->level }}</td>
                    <td>{{ $music->notes_designer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection