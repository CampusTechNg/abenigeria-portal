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
                            <a class="link-effect font-w700" href="index.php">
                                <img src="{{ asset('/assets/img/ABE-logo.png') }}" height="30" width="102">
                            </a>
                            <h1 class="h2 font-w700 mt-50 mb-10">Create New Account</h1>
                        </div>
                        {{-- END Header --}}

                        {{-- Sign Up Form --}}
                        <div class="row justify-content-center px-5">
                            <div class="col-sm-8 col-md-6 col-xl-4">
                                <form class="js-validation-signup" method="POST" action="{{ route('register') }}" autocomplete="off">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('firstname') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}">
                                                @if ($errors->has('firstname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstname') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="firstname">First Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('lastname') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
                                                @if ($errors->has('lastname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="lastname">Last Name (Surname)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('phone') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" maxlength="14">
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="phone">Phone</label>
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
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                                                <label for="password-confirm">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row text-center">
                                        <div class="col-12">
                                            <label class="css-control css-control-primary css-checkbox">
                                                <input type="checkbox" class="css-control-input" id="signup-terms" name="signup-terms">
                                                <span class="css-control-indicator"></span>
                                                I agree to Terms &amp; Conditions
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row gutters-tiny">
                                        <div class="col-12 mb-10">
                                            <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-primary">
                                                <i class="si si-user-follow mr-10"></i> Sign Up
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <span>Already have an account? </span>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('login') }}">
                                                <i class="si si-login text-muted mr-10"></i> Sign In
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- END Sign Up Form --}}
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
    <script src="/assets/js/pages/op_auth_signup.js"></script>
@endsection