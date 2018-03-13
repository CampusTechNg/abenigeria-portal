@extends('layouts.master')

@section('content')
    
    <main id="main-container">
        <div class="content">
            <h2 class="content-heading">Change Password</h2>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    
                    <div class="block">
                        <div class="block-content">

                            @if( session()->has('success_msg') )
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <p class="mb-0"> {{ session()->get('success_msg') }} </p>
                                </div>
                            @endif

                            @if( session()->has('error_msg') )
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <p class="mb-0"> {{ session()->get('error_msg') }} </p>
                                </div>
                            @endif

                            <form action="{{ url('/change-password') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group row{{ $errors->has('old_password') ? ' text-danger' : '' }}">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <input class="form-control" id="old_password" name="old_password" type="password">
                                            @if ($errors->has('old_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('old_password') }}</strong>
                                                </span>
                                            @endif
                                            <label for="old_password">Old Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row{{ $errors->has('new_password') ? ' text-danger' : '' }}">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <input class="form-control" id="new_password" name="new_password" type="password">
                                            @if ($errors->has('new_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                            @endif
                                            <label for="new_password">New Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row{{ $errors->has('confirm_password') ? ' text-danger' : '' }}">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <input class="form-control" id="confirm_password" name="confirm_password" type="password">
                                            @if ($errors->has('confirm_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                                </span>
                                            @endif
                                            <label for="confirm_password">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </main>
@endsection
