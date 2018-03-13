@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading d-print-none">My Registration - Finish Registration</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('student-section.students.shared._wizard-header')

                        <!-- Form -->
                        <form action="{{ url('/students/register/finish') }}" method="POST" autocomplete="off">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                               
                                <div class="tab-pane active" id="wizard-step2" role="tabpanel" aria-expanded="true">
                                    
                                    <div class="block-header block-header-default d-print-none">
                                        <h3 class="block-title">&nbsp;</h3>
                                        <div class="block-options">
                                            <div class="block-options-item">
                                                <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                                                    <i class="si si-printer"></i> Print Form
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block-content">
                                        <div class="row justify-content-center py-20">
                                            <div class="col-xl-10">
                                                <table class="table table-sm table-vcenter">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 47%;"></th>
                                                            <th style="width: 3%;"></th>
                                                            <th style="width: 50%;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-right">Title:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->title }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Full name:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                {{ $student->lastname }}
                                                                {{ $student->firstname }}
                                                                {{ $student->othername }} <br>
                                                                <small class="d-print-none">[ Last name, First name, Other name ]</small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Gender:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->gender }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Age:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->age }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">State of residence:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->state_of_residence }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">City of residence:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->city_of_residence }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Home address:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->home_address }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Office address:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->office_address }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Phone:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Alternative phone:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->alternative_phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Email:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Mode of study:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->mode_of_study }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Course:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                
                                                                {{ $student->course }}
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Campus:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->campus }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Education level:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->education_level }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Work experience:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->work_experience }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Source of information:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->information_source }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Referral name:</th>
                                                            <td>&nbsp;</td>
                                                            <td>{{ $student->referral_name }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                                {{-- <div class="form-group{{ $errors->has('is_completed') ? ' text-danger' : '' }} row d-print-none">
                                                    <div class="col-md-12 pt-20">
                                                        <label class="css-control css-control-primary css-checkbox">
                                                            <input class="css-control-input" id="is_completed" name="is_completed" type="checkbox">
                                                            <span class="css-control-indicator"></span>
                                                            I agree to Terms &amp; Conditions
                                                        </label>
                                                        @if ($errors->has('is_completed'))
                                                            <div class="help-block">
                                                                <strong>{{ $errors->first('is_completed') }}</strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            {{-- Steps Navigation --}}
                            <div class="block-content block-content-sm block-content-full bg-body-light d-print-none">
                                <div class="row">
                                    <div class="col-6">
                                        {{-- <a href="{{ url('/students/register/upload') }}" class="btn btn-alt-secondary">
                                            <i class="fa fa-angle-left mr-5"></i> Previous
                                        </a> --}}
                                        <a href="{{ url('/students/register/admission-requirement') }}" class="btn btn-alt-secondary">
                                            <i class="fa fa-angle-left mr-5"></i> Previous
                                        </a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check mr-5"></i> Finish
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
