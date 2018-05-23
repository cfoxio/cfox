<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    @include('clan.partials.head')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('clan.partials.topnav')

            @include('clan.partials.sidebar')

            @include('clan.partials.content')

            @include('clan.partials.footer')

        </div>
        <!-- ./wrapper -->
        @yield('scripts')

    </body>
</html>
