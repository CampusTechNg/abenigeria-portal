<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="{{ app()->getLocale() }}" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>{{ config('app.name') }}</title>

        <meta name="description" content="ABE Nigeria Portal">
        <meta name="author" content="{{ config('app.name') }}">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Open Graph Meta --}}
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:description" content="ABE Nigeria Portal">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        {{-- Icons --}}
        {{-- The following icons can be replaced with your own, they are used by desktop and mobile browsers --}}
        <link rel="shortcut icon" href="{{ asset('/assets/img/favicons/favicon.ico') }}">
        {{-- END Icons --}}

        @yield('page_css_plugin')
        
        {{-- Stylesheets --}}
        {{-- Codebase framework --}}
        <link rel="stylesheet" id="css-main" href=" {{ asset('assets/css/codebase.min.css') }}">

        {{-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: --}}
        {{-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> --}}
        {{-- END Stylesheets --}}
        
        @yield('page_css')

    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
