@extends('auth.layouts.app')

@section('content')
        <div id="page-container" class="main-content-boxed">
            {{-- Main Container --}}
            <main id="main-container">
                {{-- Page Content --}}
                <div class="bg-gd-sea">
                    <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                        {{-- Header --}}
                        <div class="py-30 px-5 text-center">
                            <a class="link-effect font-w700" href="{{ url('/') }}">
                                <img src="{{ asset('/assets/img/ABE-logo.png') }}" height="30" width="102">
                            </a>
                            <h1 class="h2 font-w700 mt-50 mb-10">Don’t worry, we’ve got your back</h1>
                            <h2 class="h4 font-w400 text-muted mb-0">Please enter your email</h2>
                        </div>
                        {{-- END Header --}}

                        {{-- Reminder Form --}}
                        <div class="row justify-content-center px-5">
                            <div class="col-sm-8 col-md-6 col-xl-4">

                                @if (session('status')) 
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif 

                                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}" autocomplete="off">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="email"> Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-primary">
                                            <i class="fa fa-asterisk mr-10"></i> Password Reminder
                                        </button>
                                        <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('login') }}">
                                            <i class="si si-login text-muted mr-10"></i> Sign In
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Reminder Form -->
                    </div>
                </div>
                {{-- END Page Content --}}
            </main>
            {{-- END Main Container --}}
        </div>
        {{-- END Page Container --}}
@endsection

@section('page_js_plugin')
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
@endsection

@section('page_js')
    <script src="/assets/js/pages/op_auth_signin.js"></script>
@endsection