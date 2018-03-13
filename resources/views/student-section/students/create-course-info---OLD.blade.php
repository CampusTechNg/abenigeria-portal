@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">My Registration - Course Selection</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('student-section.students.shared._wizard-header')

                        <!-- Form -->
                        <form action="{{ url('/students/register/course-selection') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">

                                <p class="p-10 bg-info"> <i class="fa fa-info-circle"></i>
                                    For more information about our courses, please visit the <a href="{{ url('/course-info') }}" class="text-warningz">course info</a> page
                                </p>
                               
                                <div class="tab-pane active" id="wizard-step2" role="tabpanel" aria-expanded="true">
                                    <div class="row">
                                        <div class="col-md-12">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
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
                                    

                                    @if(count($student->courses) > 0)

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label>Selected course</label>
                                                    <div class="mt-10">
                                                        <span><i class="fa fa-check text-primary"></i></span>
                                                        {{ $student->courses->first()->course }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label>Selected modules</label>
                                                    <div class="mt-10">
                                                        @foreach($student->courses as $course)
                                                        <div class="mt-10"> <span><i class="fa fa-check text-primary"></i></span> {{ $course->module }} </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @else

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('course') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <select class="form-control" id="course" name="course">
                                                        <option value=""></option>
                                                        <option value="l3_cert_bus_ess">Level 3 Certificate in Business Essentials</option>
                                                        <option value="l4_found_dip_bus_mgt">Level 4 Foundation Diploma in Business Management</option>
                                                        <option value="l4_dip_bus_mgt">Level 4 Diploma in Business Management</option>
                                                        <option value="l4_dip_bus_mgt_hum">Level 4 Diploma in Business Management and Human resources</option>
                                                        <option value="l4_dip_bus_mgt_mark">Level 4 Diploma in Business Management and Marketing</option>
                                                        <option value="l5_dip_bus_mgt">Level 5 Diploma Business Management</option>
                                                        <option value="l5_dip_bus_mgt_hum">Level 5 Diploma Business Management and Human Resources</option>
                                                        <option value="l5_dip_bus_mgt_mark">Level 5 Diploma Business Management and Marketing</option>
                                                        <option value="l6_dip_bus_mgt">Level 6 Diploma Business Management</option>
                                                        <option value="l6_dip_bus_mgt_hum">Level 6 Diploma Business Management and Human Resources</option>
                                                        <option value="l6_dip_bus_mgt_mark">Level 6 Diploma Business Management and Marketing</option>
                                                        <option value="l2_awd_set_up_bus">Award in Setting up your own Business</option>
                                                        <option value="l3_cert_bus_set_up">Certificate in Business Start-up</option>
                                                        <option value="l3_awd_digi_mark">Award in Digital Marketing Essentials for Small Businesses</option>
                                                        <option value="l2_awd_emp">Awards in Employability Skills: Making the Move to Work</option>
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

                                    <div class="row" id="modules_row" style="display:none;">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label for="modules">Modules <span class="text-danger">*</span> 
                                                    <small>Please modules with [ * ] are compulsory</small></label>
                                                    <div id="modules" class="mt-10">
                                                        
                                                    </div>

                                                    <div id="success_msg" class="mt-15">
                                                        <button id="submit_module" type="button" class="btn btn-sm btn-info">Submit module</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endif

                                </div>

                            {{-- Steps Navigation --}}
                            <div class="block-content block-content-sm block-content-full bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ url('/students/register/contact') }}" class="btn btn-alt-secondary">
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

@section('page_js')
<script type="text/javascript" src="{{ asset('assets/js/data/courses_modules.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#course').change(function(){
            //Remove all modules that may be selected already
            $('#modules').empty();
            var course = $('#course option:selected').val();
            
            var modules = getModule(course);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            for (index = 0; index < modules.length; index++) {
                var payload = '<div class="custom-controls-stacked">' +
                                        '<label class="css-control css-control-primary css-checkbox">' +
                                            '<input class="css-control-input" type="checkbox" value="'+ modules[index] +'">' +
                                            '<span class="css-control-indicator"></span>' + modules[index] +
                                        '</label>' +
                                    '</div>';
            
            $('#modules').append(payload);

            }
            $('#modules_row').show();
            
        });

        $('#submit_module').click(function(){
            var _id = $('.css-control-input:checked').map(function() {
                return $(this).val();
            });

            for (i = 0; i < _id.length; i++) {

                var postData = {
                    'course': $('#course option:selected').text(),
                    'module': _id[i],
                };

                $.ajax({
                    type: 'POST',
                    url: "/studuents/register/register-course",
                    data: postData,
                    beforeSend : function() {
                        $( '#submit_module' ).html('<span><i class="fa fa-spinner fa-spin"></i></span> Submitting');
                        $('#submit_module').prop({"disabled": true});
                    },
                    success: function(response) {
                        $('#success_msg').empty();
                        $( '#success_msg' ).html('<span class="text-primary">Modules have been submitted please proceed to the next step</span>');
                        // $( '#submit_module' ).remove();
                    },
                    error: function(response) {
                        $( '#submit_module' ).html('Try again');
                    }
                });

            }

        });

    });
</script>

@endsection
