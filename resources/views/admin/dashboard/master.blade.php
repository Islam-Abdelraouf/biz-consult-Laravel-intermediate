<!doctype html>
<html lang="en">

    <!-- navbar start -->
    @include('admin.dashboard.partials.header')

    <body class="vertical light">
        <div class="wrapper">

            <!-- navbar start -->
            @include('admin.dashboard.partials.navbar')

            <!-- sidebar main -->
            @include('admin.dashboard.partials.sidebar')

            <!-- main content start -->
            <main role="main" class="main-content">

                @yield('content')

            </main> <!-- main -->
        </div>

        <!-- scripts start -->
        @include('admin.dashboard.partials.scripts')

    </body>

</html>
