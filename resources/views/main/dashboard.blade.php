@extends('main.index')

@section('headline', 'Dashboard')

@section('breadcrumb')
    {{ Breadcrumbs::render('main.dashboard') }}
@endsection

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-4">Your Clans</h3>
        <div class="row justify-content-center">
            @foreach ($clans as $clan)
                <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info-active">
                        <h3 class="widget-user-username">{{ $clan->name }}</h3>
                        <h5 class="widget-user-desc">Your Role</h5>
                    </div>
                    <a href="http://{{ $clan->subdomain }}{{ config('session.domain') }}">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="/img/adminlte/default-150x150.png" alt="User Avatar">
                        </div>
                    </a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">32</h5>
                                    <span class="description-text">Members</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3</h5>
                                    <span class="description-text">Teams</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">2</h5>
                                    <span class="description-text">New notifications</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            @endforeach
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">New clan</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Get started</h6>

                        <p class="card-text">with your own clan on cfox.io</p>
                        <a href="{{ route('main.clans.create') }}" class="btn btn-success">Create it now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- AdminLTE App -->
    <script src="/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('.select-country').select2();
        });
    </script>
@endsection
