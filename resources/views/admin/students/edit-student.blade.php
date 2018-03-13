@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">Edit Student Registration</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="block-header block-header-default d-print-none">
                            <h3 class="block-title"><a href="{{ url('/students') }}"><i class="si si-arrow-left"></i> Go back</a></h3>
                        </div>

                        <div class="block-content block-content-full">

                            @if( session()->has('success_msg') )
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <p class="mb-0"> {{ session()->get('success_msg') }} </p>
                                </div>
                            @endif
                            
                            <form action="{{ url('/students/' . $student->uid) }}" method="POST" autocomplete="off">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                {{-- Steps Content --}}
                                <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                    
                                    <h3 class="block-title text-muted mb-20">Personal Information</h3>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
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
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('gender') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <select class="form-control" id="gender" name="gender">
                                                        <option value=""></option>
                                                        <option value="Male"  {{ ($student->gender == 'Male' or old('gender') == 'Male') ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ ($student->gender == 'Female' or old('gender') == 'Female') ? 'selected' : '' }}>Female</option>
                                                    </select>
                                                    @if ($errors->has('gender'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="gender">Gender <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6">
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

                                    <h3 class="block-title text-muted my-20">Contact Information</h3>

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

                                    <h3 class="block-title text-muted my-20">Course Information</h3>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('mode_of_study') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <select class="form-control" id="mode_of_study" name="mode_of_study">
                                                        <option value=""></option>
                                                        <option value="Part Time" {{ ($student->mode_of_study == 'Part Time' or old('mode_of_study') == 'Part Time') ? 'selected' : '' }}>Part Time</option>
                                                        <option value="Full Time" {{ ($student->mode_of_study == 'Full Time' or old('mode_of_study') == 'Full Time') ? 'selected' : '' }}>Full Time</option>
                                                    </select>
                                                    @if ($errors->has('mode_of_study'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('mode_of_study') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="mode_of_study">Mode of study <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('campus') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <select class="form-control" id="campus" name="campus">
                                                        <option value=""></option>
                                                        <option value="Abuja" {{ ($student->campus == 'Abuja' or old('campus') == 'Abuja') ? 'selected' : '' }}>Abuja</option>
                                                        <option value="Kaduna" {{ ($student->campus == 'Kaduna' or old('campus') == 'Kaduna') ? 'selected' : '' }}>Kaduna</option>
                                                        <option value="Kano" {{ ($student->campus == 'Kano' or old('campus') == 'Kano') ? 'selected' : '' }}>Kano</option>
                                                    </select>
                                                    @if ($errors->has('campus'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('campus') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="campus">Campus <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="course" name="course">
                                                        <option data-code=""></option>
                                                        @foreach($courses as $course_code => $course_name)
                                                            <option data-code="{{ $course_code }}" value="{{ $course_name or old('course') }}" {{ ($student->course == $course_name) ? 'selected' : '' }}>
                                                                {{ $course_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('course'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('course') }}</strong>
                                                        </span>
                                                    @endif
                                                    <label for="course">Course <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="block-title text-muted my-20">Admission Requirement</h3>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="education_level" name="education_level">
                                                        <option value=""></option>
                                                        <option value="GCE, A Levels" {{ ($student->education_level == 'GCE, A Levels' or old('education_level') == 'GCE, A Levels') ? 'selected' : '' }}>GCE, A Levels</option>
                                                        <option value="BTEC HND" {{ ($student->education_level == 'BTEC HND' or old('education_level') == 'BTEC HND') ? 'selected' : '' }}>BTEC HND</option>
                                                        <option value="Foundation Degree" {{ ($student->education_level == 'Foundation Degree' or old('education_level') == 'Foundation Degree') ? 'selected' : '' }}>Foundation Degree</option>
                                                        <option value="Bachelors Degree" {{ ($student->education_level == 'Bachelors Degree' or old('education_level') == 'Bachelors Degree') ? 'selected' : '' }}>Bachelors Degree</option>
                                                        <option value="Postgraduate Certificate" {{ ($student->education_level == 'Postgraduate Certificate' or old('education_level') == 'Postgraduate Certificate') ? 'selected' : '' }}>Postgraduate Certificate</option>
                                                        <option value="Postgraduate Diploma" {{ ($student->education_level == 'Postgraduate Diploma' or old('education_level') == 'Postgraduate Diploma') ? 'selected' : '' }}>Postgraduate Diploma</option>
                                                        <option value="Master Degree" {{ ($student->education_level == 'Master Degree' or old('education_level') == 'Master Degree') ? 'selected' : '' }}>Master Degree</option>
                                                        <option value="Others" {{ ($student->education_level == 'Others' or old('education_level') == 'Others') ? 'selected' : '' }}>Others</option>
                                                    </select>
                                                    <label for="education_level">Level of education</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="work_experience" name="work_experience">
                                                        <option value=""></option>
                                                        <option value="0 - 3 years" {{ ($student->work_experience == '0 - 3 years' or old('work_experience') == '0 - 3 years') ? 'selected' : '' }}>0 - 3 years</option>
                                                        <option value="3 - 5 years" {{ ($student->work_experience == '3 - 5 years' or old('work_experience') == '3 - 5 years') ? 'selected' : '' }}>3 - 5 years</option>
                                                        <option value="5 - 7 years" {{ ($student->work_experience == '5 - 7 years' or old('work_experience') == '5 - 7 years') ? 'selected' : '' }}>5 - 7 years</option>
                                                        <option value="7 - 10 years" {{ ($student->work_experience == '7 - 10 years' or old('work_experience') == '7 - 10 years') ? 'selected' : '' }}>7 - 10 years</option>
                                                    </select>
                                                    <label for="work_experience">Work experience</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="information_source" name="information_source">
                                                        <option value=""></option>
                                                        <option value="Radio" {{ ($student->information_source == 'Radio' or old('information_source') == 'Radio') ? 'selected' : '' }}>Radio</option>
                                                        <option value="Facebook" {{ ($student->information_source == 'Facebook' or old('information_source') == 'Facebook') ? 'selected' : '' }}>Facebook</option>
                                                        <option value="Twitter" {{ ($student->information_source == 'Twitter' or old('information_source') == 'Twitter') ? 'selected' : '' }}>Twitter</option>
                                                        <option value="Instagram" {{ ($student->information_source == 'Instagram' or old('information_source') == 'Instagram') ? 'selected' : '' }}>Instagram</option>
                                                        <option value="Flyer" {{ ($student->information_source == 'Flyer' or old('information_source') == 'Flyer') ? 'selected' : '' }}>Flyer</option>
                                                        <option value="Referral" {{ ($student->information_source == 'Referral' or old('information_source') == 'Referral') ? 'selected' : '' }}>Referral</option>
                                                    </select>
                                                    <label for="information_source">How did you hear about ABE Nigeria?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input class="form-control" id="referral_name" name="referral_name" type="text" value="{{ $student->referral_name or old('referral_name') }}">
                                                    <label for="referral_name">Referral name </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="block-title text-muted mt-20 mb-0">Document Uploaded</h3>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <div class="mb-15">
                                                        Passport Photograph
                                                        @if($student->photo != 'noimage.png')
                                                            <span class="badge badge-info"> <i class="fa fa-check"></i> Uploaded</span>

                                                            {{-- <a class="badge badge-danger" href="{{ url('/') }}"> <i class="fa fa-close"></i> Remove</a> --}}
                                                        @endif
                                                    </div>

                                                    <div class="mb-15">
                                                        Academic certificate 1
                                                        @if($student->acad_cert_1)
                                                            <span class="badge badge-info"> <i class="fa fa-check"></i> Uploaded</span>

                                                            {{-- <a class="badge badge-danger" href="{{ url('/') }}"> <i class="fa fa-close"></i> Remove</a> --}}
                                                        @endif
                                                    </div>

                                                    <div class="mb-15">
                                                        Academic certificate 2
                                                        @if($student->acad_cert_2)
                                                            <span class="badge badge-info"> <i class="fa fa-check"></i> Uploaded</span>

                                                            {{-- <a class="badge badge-danger" href="{{ url('/') }}"> <i class="fa fa-close"></i> Remove</a> --}}
                                                        @endif
                                                    </div>

                                                    <div class="mb-15">
                                                        Academic certificate 3
                                                        @if($student->acad_cert_3)
                                                            <span class="badge badge-info"> <i class="fa fa-check"></i> Uploaded</span>

                                                            {{-- <a class="badge badge-danger" href="{{ url('/') }}"> <i class="fa fa-close"></i> Remove</a> --}}
                                                        @endif
                                                    </div>

                                                    <div class="mb-15">
                                                        Academic certificate 4
                                                        @if($student->acad_cert_4)
                                                            <span class="badge badge-info"> <i class="fa fa-check"></i> Uploaded</span>

                                                            {{-- <a class="badge badge-danger" href="{{ url('/') }}"> <i class="fa fa-close"></i> Remove</a> --}}
                                                        @endif
                                                    </div>

                                                    <div class="mb-15">
                                                        Current CV
                                                        @if($student->cv)
                                                            <span class="badge badge-info"> <i class="fa fa-check"></i> Uploaded</span>

                                                            {{-- <a class="badge badge-danger" href="{{ url('/') }}"> <i class="fa fa-close"></i> Remove</a> --}}
                                                        @endif
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
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check ml-5"></i> Update 
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

@section('page_js')

<script type="text/javascript">
    $('document').ready(function(){
        $('#reset_course').click(function(){
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'DELETE',
                url: "/students/{{ $student->uid }}/courses",

                beforeSend: function() {
                    $('#reset_course').prop({ 'disabled': true });
                    $('#reset_course').html('<i class="fa fa-spinner fa-spin"></i> Resetting');
                },
                success: function(response) {
                    $('#reset_course').prop({ 'disabled': true });
                    $('#reset_course').remove();
                    $('#course_row').slideUp();
                    $('#module_row').slideUp();
                },
                error: function(response) {
                    $('#reset_course').html('<i class="si si-action-redo"></i> Try again');
                }
            });
            
        });


    });
</script>

@endsection
