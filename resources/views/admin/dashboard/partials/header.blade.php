<!-- navbar start -->
@php
    // use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
    $dir = LaravelLocalization::getCurrentLocale() == 'en' ? 'assets-admin' : 'assets-admin-rtl';
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ __('keywords.dashboard') }} - @yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    
<!-- Google Web Fonts -->
{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&amp;family=Inter:wght@700;800&amp;display=swap" rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}
        <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/feather.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/select2.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/dropzone.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/uppy.min.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/jquery.steps.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/app-dark.css" id="darkTheme" disabled>
    <style>
        .table thead th {
            background-color: #f8f8f8 !important;
            color: #000000 !important;
            border: none !important;
            border-radius: 2px;
            /* red text */
        }

        .table tr:hover {
            background-color: #f8f8f8 !important;

            /* red text */
        }

        .btn:hover {
            : #f8f8f8 !important;

            /* red text */
        }

        /* Apply animation to all buttons */

        a[href].btn-create {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            /* spacing between icon and text */
            vertical-align: middle;
        }

        /* button, */
        .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Subtle lift on hover */
        /* button:hover, */
        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        }

        /* Smooth “click” feedback */
        /* button:active, */
        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        hr.side-menu {
            border: none;
            /* Remove default border */
            border-top: 1px solid #ccc;
            /* Add a top border for the line */
            margin-top: 0;
            /* Add some vertical space */
            width: 100%;
            /* Set a specific width */
            background-color: transparent;
            Ensure background is transparent
        }
    </style>
</head>
