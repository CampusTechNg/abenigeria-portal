@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading d-print-none">Prospective Student - Student Form</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="block-header block-header-default d-print-none">
                            <h3 class="block-title"><a href="{{ url('/students') }}"><i class="si si-arrow-left"></i> Go back</a></h3>
                            <div class="block-options">
                                <div class="block-options-item">
                                    <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                                        <i class="si si-printer"></i> Print Form
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block-content block-content-full">

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                               
                                <div class="tab-pane active" id="wizard-step2" role="tabpanel" aria-expanded="true">
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
                                                            <td>{{ $student->course }}</td>
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
                                                        <tr class="d-print-none">
                                                            <th class="text-right">Academic certificate 1:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                @if($student->acad_cert_1)
                                                                <a href="{{ config('app.fetch_student_doc') . $student->acad_cert_1 }}" target="_blank">View document</a>
                                                                @else
                                                                Not uploaded
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="d-print-none">
                                                            <th class="text-right">Academic certificate 2:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                @if($student->acad_cert_2)
                                                                <a href="{{ config('app.fetch_student_doc') . $student->acad_cert_2 }}" target="_blank">View document</a>
                                                                @else
                                                                Not uploaded
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="d-print-none">
                                                            <th class="text-right">Academic certificate 3:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                @if($student->acad_cert_3)
                                                                <a href="{{ config('app.fetch_student_doc') . $student->acad_cert_3 }}" target="_blank">View document</a>
                                                                @else
                                                                Not uploaded
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="d-print-none">
                                                            <th class="text-right">Academic certificate 4:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                @if($student->acad_cert_4)
                                                                <a href="{{ config('app.fetch_student_doc') . $student->acad_cert_4 }}" target="_blank">View document</a>
                                                                @else
                                                                Not uploaded
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="d-print-none">
                                                            <th class="text-right">Current CV:</th>
                                                            <td>&nbsp;</td>
                                                            <td>
                                                                @if($student->cv)
                                                                <a href="{{ config('app.fetch_student_doc') . $student->cv }}" target="_blank">View document</a>
                                                                @else
                                                                Not uploaded
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
