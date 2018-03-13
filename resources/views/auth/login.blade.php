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
                            <h1 class="h2 font-w700 mt-50 mb-10">Please sign in</h1>
                        </div>
                        {{-- END Header --}}

                        {{-- Sign In Form --}}
                        <div class="row justify-content-center px-5">
                            <div class="col-sm-8 col-md-6 col-xl-4">                                
                                <form class="js-validation-signin" method="POST" action="{{ route('login') }}" autocomplete="off">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="login-username" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="password" name="password">
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <label class="css-control css-control-primary css-checkbox">
                                                <input class="css-control-input" id="remember" name="remember" type="checkbox">
                                                <span class="css-control-indicator"></span>
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row gutters-tiny">
                                        <div class="col-12 mb-10">
                                            <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-primary" data-toggle="click-ripple">
                                                <i class="si si-login mr-10"></i> Sign In
                                            </button>
                                        </div>
                                        <div class="col-sm-6 mb-5">
                                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('register') }}">
                                                <i class="fa fa-plus text-muted mr-5"></i> New Account
                                            </a>
                                        </div>
                                        <div class="col-sm-6 mb-5">
                                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('password.request') }}">
                                                <i class="fa fa-warning text-muted mr-5"></i> Forgot password
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- END Sign In Form --}}
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