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
                                    For more information about our courses, please visit the <a href="{{ url('/course-info') }}" class="text-white">COURSE INFORMATION</a> page
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
                                                        {{--  <option value="Kaduna" {{ ($student->campus == 'Kaduna' or old('campus') == 'Kaduna') ? 'selected' : '' }}>Kaduna</option>  --}}
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

                                    <div class="row" id="class_resumption">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <p id="resumption_date">

                                                    </p>
                                                    <label id="date_label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('course') ? ' text-danger' : '' }}">
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

                                    <div class="row" id="modules_row" style="display:none;">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label for="modules">Elements</label>
                                                    <div id="modules" class="mt-10">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- @endif --}}

                                </div>
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
        $('#class_resumption').hide();
        
        $('#course').change(function(){
            //Remove all modules that may be selected already
            $('#modules').empty();

            var course = $('#course option:selected').data('code');
            
            //The function getMocule() is coming from 'assets/js/data/courses_module.js'
            var modules = getModule(course);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            for (index = 0; index < modules.length; index++) {

                var payload =   '<div class="mt-10"> <span><i class="fa fa-check text-primary"></i></span> ' + 
                                modules[index] + '</div>'
            
            $('#modules').append(payload);

            }
            $('#modules_row').show();
            
        });

        $('#campus').change(function(){
            $('#resumption_date').empty();
            $('#date_label').empty();
            $('#class_resumption').hide();

            var campus = $('#campus option:selected').val();

            if(campus == 'Abuja'){
                $('#class_resumption').show();
                $('#date_label').append('Resumption Date');
                $('#resumption_date').append('2nd July, 2018');
            } else if(campus == 'Kano') {
                $('#class_resumption').show();
                $('#date_label').append('Resumption Date');
                $('#resumption_date').append('9th April, 2018');
            }
        });

    });
</script>

@endsection
