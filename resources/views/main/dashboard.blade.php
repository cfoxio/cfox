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
                </div>
            </div>
        </div>
    </div>
    @foreach ($clans as $clan)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $clan->name }}</div>
                    <div class="card-body">
                        <a href="http://{{ $clan->subdomain }}{{ config('session.domain') }}">Go to dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your cool clan!</div>
                <div class="card-body">
                    <a href="{{ route('main.create_clan') }}">Create it!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
