@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">Create User</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        {{-- <div class="block-header block-header-default d-print-none">
                            <h3 class="block-title"><a href="{{ url('/students') }}"><i class="si si-arrow-left"></i> Go back</a></h3>
                        </div> --}}

                        <div class="block-content block-content-full">

                            @if( session()->has('success_msg') )
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <p class="mb-0"> {{ session()->get('success_msg') }} </p>
                                </div>
                            @endif
                            
                            <form action="{{ url('/users/create') }}" method="POST" autocomplete="off">
                                {{ csrf_field() }}

                                {{-- Steps Content --}}
                                <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                    
                                    <h3 class="block-title text-muted mb-20">User Login Details</h3>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('firstname') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="firstname" name="firstname" type="text" value="{{ old('firstname') }}">
                                                    @if ($errors->has('firstname'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('firstname') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="firstname">First name <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('lastname') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="lastname" name="lastname" type="text" value="{{ old('lastname') }}">
                                                    @if ($errors->has('lastname'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('lastname') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="lastname">Last name (Surname) <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('email') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('role') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <select class="form-control" id="role" name="role">
                                                        <option value=""></option>
                                                        <option value="Admin" {{ (old('role') == 'Admin') ? 'selected' : '' }}>Admin</option>
                                                        {{-- <option value="User" {{ (old('role') == 'User') ? 'selected' : '' }}>User</option> --}}
                                                    </select>
                                                    @if ($errors->has('role'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('role') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="role">Role <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="password" name="password" type="password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="password">Password <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input class="form-control" id="password-confirm" name="password_confirmation" type="password">
                                                    <label for="password-confirm">Confirm Password <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                      
                                </div>
                                {{-- END Steps Content --}}

                                {{-- Steps Navigation --}}
                                <div class="block-content block-content-sm block-content-full bg-body-light">
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check ml-5"></i> Create 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Steps Navigation -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
