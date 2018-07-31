@extends('clan.index')

@section('headline', 'Teams')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Founded</th>
                                <th>Playercount</th>
                                <th>Teamleader</th>
                                <th>Manager</th>
                                <th></th>
                            </tr>
                            @foreach ($teams as $team)
                                <tr data-href="{{ route('clan.teams.show', array($clan->subdomain, $team->id)) }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->created_at->format('d.m.Y') }}</td>
                                    <td>{{ count($team->users) }}</td>
                                    <td>{{ $team->teamleader->name }}</td>
                                    <td>{{ $team->manager->name }}</td>
                                    <td>
                                        <a href="{{ route('clan.teams.show', array($clan->subdomain, $team->slug)) }}">
                                            <i class="fa fa-external-link" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- AdminLTE App -->
    <script src="/js/app.js"></script>
@endsection
