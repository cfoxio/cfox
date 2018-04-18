@extends('main.index')

@section('headline', 'Create new clan')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">What we need to know..</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" enctype="multipart/form-data" action="/clans/new">
                        {{ csrf_field() }}

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Clan name</label>
                                <input type="text" class="{{ count($errors->get('name')) ? 'is-invalid ' : "" }}form-control" name="name" id="name" placeholder="Name of your clan" value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="homepage">Homepage</label>
                                <input type="text" class="{{ count($errors->get('homepage')) ? 'is-invalid ' : "" }}form-control" name="homepage" id="homepage" placeholder="http://www.yourclan.com" value="{{ old('homepage') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('homepage') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subdomain">Subdomain</label>
                                <div class="input-group">
                                    <input type="text" class="{{ count($errors->get('subdomain')) ? 'is-invalid ' : "" }}form-control" name="subdomain" id="subdomain" placeholder="The subdomain you want to use for your clan" value="{{ old('subdomain') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.cfox.io</span>
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('subdomain') }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state">Country</label>
                                <select class="select-country form-control" style="width: 100%;" name="country">
                                    @foreach (Countries::getList('en', 'php') as $code => $country)
                                        <option value="{{ $code }}" {{ (old("country") == $code ? "selected":"") }}>{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Clan Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input style="width: 100%;" type="file" class="{{ count($errors->get('logo')) ? 'is-invalid ' : "" }}custom-file-input" name="logo" id="logo">
                                        <label class="custom-file-label" for="logo">Choose Logo</label>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('logo') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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
