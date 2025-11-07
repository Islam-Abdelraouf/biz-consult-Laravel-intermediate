{{-- @php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp --}}


<!doctype html>
<html lang="en">

    <!-- navbar start -->
    @include('admin.dashboard.partials.header')

    <body class="vertical light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif">
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
