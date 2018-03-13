@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">My Registration - Contact Information</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('student-section.students.shared._wizard-header')

                        <!-- Form -->
                        <form action="{{ url('/students/register/contact') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                
                                <div class="tab-pane active" role="tabpanel" aria-expanded="true">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('phone') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="phone" name="phone" type="text" value="{{ $student->phone or old('phone') }}" maxlength="14">
                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('alternative_phone') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="alternative_phone" name="alternative_phone" type="text" value="{{ $student->alternative_phone or old('alternative_phone') }}" maxlength="14">
                                                    @if ($errors->has('alternative_phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('alternative_phone') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="alternative_phone">Alternative phone</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('email') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="email" name="email" type="email" value="{{ $student->email or old('email') }}">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="email">Email <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="state_of_residence" name="state_of_residence">
                                                        <option value=""></option>
                                                        @foreach($states as $state)
                                                            <option value="{{ $state }}" {{ ($student->state_of_residence == $state or old('state_of_residence') == $state) ? 'selected' : '' }}>{{ $state }}</option>
                                                        @endforeach

                                                    </select>
                                                    <label for="state_of_residence">State of residence</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('home_address') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="home_address" name="home_address" type="text" value="{{ $student->home_address or old('home_address') }}">
                                                    @if ($errors->has('home_address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('home_address') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="home_address">Home address <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input class="form-control" id="office_address" name="office_address" type="text" value="{{ $student->office_address or old('office_address') }}">
                                                    <label for="office_address">Office address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                            {{-- END Steps Content --}}

                            {{-- Steps Navigation --}}
                            <div class="block-content block-content-sm block-content-full bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ url('/students/register/profile') }}" class="btn btn-alt-secondary">
                                            <i class="fa fa-angle-left mr-5"></i> Previous
                                        </a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-alt-secondary">
                                            Next <i class="fa fa-angle-right ml-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- END Steps Navigation -->
                        </form>
                    @include('student-section.students.shared._wizard-footer')
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
