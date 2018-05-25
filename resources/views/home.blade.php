@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div><a href="{{ url('upload') }}">upload</a></div>
                    <div><a href="{{ url('?user='.\Auth::user()['name']) }}">スコア</a></div>
                    <div><a href="{{ url('api') }}">api</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
