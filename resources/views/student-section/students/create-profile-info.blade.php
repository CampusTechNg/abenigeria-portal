@extends('layouts.master')

@section('page_css_plugin')
<link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">My Registration - Profile Information</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('student-section.students.shared._wizard-header')

                        <!-- Form -->
                        <form action="{{ url('/students/register/profile') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                
                                <div class="tab-pane active" role="tabpanel" aria-expanded="true">
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('title') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <select class="form-control" id="title" name="title">
                                                        <option value=""></option>
                                                        <option value="Mr" {{ ($student->title == 'Mr' or old('title') == 'Mr') ? 'selected' : '' }}>Mr</option>
                                                        <option value="Mrs" {{ ($student->title == 'Mrs' or old('title') == 'Mrs') ? 'selected' : '' }}>Mrs</option>
                                                        <option value="Miss" {{ ($student->title == 'Miss' or old('title') == 'Miss') ? 'selected' : '' }}>Miss</option>
                                                        <option value="Ms" {{ ($student->title == 'Ms' or old('title') == 'Ms') ? 'selected' : '' }}>Ms</option>
                                                    </select>
                                                    @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="title">Title <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('lastname') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="lastname" name="lastname" type="text" value="{{ $student->lastname or old('lastname') }}">
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
                                            <div class="form-group{{ $errors->has('firstname') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="firstname" name="firstname" type="text" value="{{ $student->firstname or old('firstname') }}">
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
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input class="form-control" id="othername" name="othername" type="text" value="{{ $student->othername or old('othername') }}">
                                                    <label for="othername">Other name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('age') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <input class="form-control" id="age" name="age" type="text" value="{{ $student->age or old('age') }}" maxlength="2">
                                                    @if ($errors->has('age'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('age') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="age">Age <span class="text-danger">*</span></label>
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
                                        <button type="button" class="btn btn-alt-secondary disabled">
                                            <i class="fa fa-angle-left mr-5"></i> Previous
                                        </button>
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

@section('page_js_plugin')
<script src="{{ asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@endsection

@section('page_js')
<script>
    jQuery(function(){
        Codebase.helpers(['datepicker']);
    });
</script>
@endsection
