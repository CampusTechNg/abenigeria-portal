@extends('layouts.master')

@section('page_css_plugin')
<link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">My Registration - Admission Requirement</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('student-section.students.shared._wizard-header')

                        <!-- Form -->
                        <form action="{{ url('/students/register/admission-requirement') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                               
                                <div class="tab-pane active" id="wizard-step2" role="tabpanel" aria-expanded="true">
                                    <div class="row">
                                        <div class="col-md-12">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <select class="form-control" id="work_experience" name="work_experience">
                                                        <option value=""></option>
                                                        <option value="0 - 5 years" {{ ($student->work_experience == '0 - 5 years' or old('work_experience') == '0 - 5 years') ? 'selected' : '' }}>0 - 5 years</option>
                                                        <option value="5 - 10 years" {{ ($student->work_experience == '5 - 10 years' or old('work_experience') == '5 - 10 years') ? 'selected' : '' }}>5 - 10 years</option>
                                                        <option value="Above 10 years" {{ ($student->work_experience == 'Above 10 years' or old('work_experience') == 'Above 10 years') ? 'selected' : '' }}>Above 10 years</option>
                                                    </select>
                                                    <label for="work_experience">Work experience</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input class="form-control" id="referral_name" name="referral_name" type="text" value="{{ $student->referral_name or old('referral_name') }}">
                                                    <label for="referral_name">Referral name </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Steps Navigation --}}
                            <div class="block-content block-content-sm block-content-full bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ url('/students/register/course-selection') }}" class="btn btn-alt-secondary">
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
