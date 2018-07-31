@extends('clan.index')

@section('headline', $team->name)

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Players</h3>

                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        @foreach ($team->users as $player)
                            <div class="card-body player-card row justify-content-center" id="{{ $player->name }}">
                                <div class="col-xl-3 col-md-4 image">
                                    <a href="#">
                                        <img class="img-circle" src="/img/user_images/smooya_128x128.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-9 col-md-8 info">
                                    <a href="#">
                                        <h5>Vorname <b>{{ $player->name }}</b> Nachname</h5>
                                    </a>
                                    <div class="player-info d-flex justify-content-around align-items-center flex-wrap">
                                        <dl class="player-info-item">
                                            <dt>{{ __('player.join_date') }}</dt>
                                            <dd>13.03.2018</dd>
                                        </dl>
                                        <dl class="player-info-item">
                                            <dt>{{ __('player.role') }}</dt>
                                            <dd>AWP</dd>
                                        </dl>
                                        <dl class="player-info-item">
                                            <dt>{{ __('player.nationality') }}</dt>
                                            <dd><span class="flag-icon flag-icon-{{ strtolower($player->nationality) }}"></span> {{ __('countries.' . $player->nationality)}}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        @endforeach
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gallery</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide team-images" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="team-image-item" style="background-image: url(/img/team_images/big_1.jpg)">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="team-image-item" style="background-image: url(/img/team_images/big_2.jpg)">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="team-image-item" style="background-image: url(/img/team_images/big_3.jpg)">

                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Teaminfo</h3>
                        </div>
                        <div class="card-body">
                            <dl>
                                <dt>Teamleader</dt>
                                <dd><a data-scroll href="#{{ $team->teamleader->name }}">{{ $team->teamleader->name }}</a></dd>
                                <dt>Teammanager</dt>
                                <dd>
                                    @if ($team->manager)
                                        <a href="#">{{ $team->manager->name }}</a>
                                    @else
                                        -
                                    @endif
                                </dd>
                                <dt>Spiel</dt>
                                <dd>Counter-Strike: Global Offensive</dd>
                                <dt>Gründungsdatum</dt>
                                <dd>{{ $team->created_at->format('d.m.Y') }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Options</h3>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- AdminLTE App -->
    <script src="/js/app.js"></script>
@endsection
