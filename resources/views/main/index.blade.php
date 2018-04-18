<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    @include('main.partials.head')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('main.partials.topnav')

            @include('main.partials.sidebar')

            @include('main.partials.content')

            @include('main.partials.footer')

        </div>
        <!-- ./wrapper -->
        @yield('scripts')

    </body>
</html>
