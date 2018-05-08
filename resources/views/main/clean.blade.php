<!DOCTYPE html>

<html>

    @include('main.partials.head')

    <body class="hold-transition @yield('page-type')-page">

        @yield('content')

        @yield('scripts')

    </body>

</html>
