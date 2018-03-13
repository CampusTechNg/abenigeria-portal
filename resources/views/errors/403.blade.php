<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
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

        <link rel="shortcut icon" href="{{ asset('/assets/img/favicons/favicon.ico') }}">
        <link rel="stylesheet" id="css-main" href=" {{ asset('assets/css/codebase.min.css') }}">      
    </head>
	<body>

		<div id="page-container" class="main-content-boxed">
		    <main id="main-container">
				<div class="hero bg-white">
				    <div class="hero-inner">
				        <div class="content content-full">
				            <div class="py-30 text-center">
				                <div class="display-3 text-danger">
				                    <i class="si si-ban"></i> 403
				                </div>
				                <h1 class="h2 font-w700 mt-30 mb-10">Oops.. You just found an error page..</h1>
				                <h2 class="h3 font-w400 text-muted mb-50">We are sorry but you do not have permission to access this page..</h2>
				                <a class="btn btn-hero btn-rounded btn-alt-secondary" href="{{ url('/') }}">
				                    <i class="fa fa-arrow-left mr-10"></i> Back to Home
				                </a>
				            </div>
				        </div>
				    </div>
				</div>
	    	</main>
	    </div>
    </body>
</html>