<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                @yield('headline')
            </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Create new clan</li>
            </ol> --}}
            @yield('breadcrumb')
        </div><!-- /.col -->

    </div><!-- /.row -->
</div><!-- /.container-fluid -->
