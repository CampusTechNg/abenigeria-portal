@extends('layouts.master')

@section('page_css_plugin')
<link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">My Registration - Upload Document</h2>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('student-section.students.shared._wizard-header')

                        <!-- Form -->
                        <form action="{{ url('/students/register/upload') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- Steps Content --}}
                            <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                               
                                <p class="p-10 bg-info"><i class="fa fa-info-circle"></i> 
                                    Image should NOT be more than 1MB.
                                </p>

                                <div class="tab-pane active" id="wizard-step2" role="tabpanel" aria-expanded="true">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('photo') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <label for="photo">Passport photograph ( jpg, jpeg, png ) <span class="text-danger">*</span></label><br>
                                                    <input id="photo" name="photo" type="file">
                                                    @if ($errors->has('photo'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('photo') }}</strong>
                                                        </div>
                                                    @endif
                                                    @if($student->photo != 'noimage.png')
                                                        <span class="badge badge-success"> <i class="fa fa-check"></i> Uploaded</span>
                                                    @endif
                                                    <input type="hidden" name="old_photo" value="{{ $student->photo }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <div class="row">
                                        <div class="col-12">
                                            <p class="p-10 bg-info"><i class="fa fa-info-circle"></i> 
                                                Each document should NOT be more than 3MB
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group{{ $errors->has('acad_cert_1') ? ' text-danger' : '' }}">
                                                <div class="form-material">
                                                    <label for="acad_cert_1">Academic certificate 1 ( pdf, jpg, jpeg, png )</label><br>
                                                    <input id="acad_cert_1" name="acad_cert_1" type="file">
                                                    @if ($errors->has('acad_cert_1'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('acad_cert_1') }}</strong>
                                                        </div>
                                                    @endif
                                                    @if($student->acad_cert_1)
                                                        <span class="badge badge-success"> <i class="fa fa-check"></i> Uploaded</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label for="acad_cert_2">Academic certificate 2 ( pdf, jpg, jpeg, png )</label><br>
                                                    <input id="acad_cert_2" name="acad_cert_2" type="file">
                                                    @if ($errors->has('acad_cert_2'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('acad_cert_2') }}</strong>
                                                        </div>
                                                    @endif
                                                    @if($student->acad_cert_2)
                                                        <span class="badge badge-success"> <i class="fa fa-check"></i> Uploaded</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label for="acad_cert_3">Academic certificate 3 ( pdf, jpg, jpeg, png )</label><br>
                                                    <input id="acad_cert_3" name="acad_cert_3" type="file">
                                                    @if ($errors->has('acad_cert_3'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('acad_cert_3') }}</strong>
                                                        </div>
                                                    @endif
                                                    @if($student->acad_cert_3)
                                                        <span class="badge badge-success"> <i class="fa fa-check"></i> Uploaded</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label for="acad_cert_4">Academic certificate 4 ( pdf, jpg, jpeg, png )</label><br>
                                                    <input id="acad_cert_4" name="acad_cert_4" type="file">
                                                    @if ($errors->has('acad_cert_4'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('acad_cert_4') }}</strong>
                                                        </div>
                                                    @endif
                                                    @if($student->acad_cert_4)
                                                        <span class="badge badge-success"> <i class="fa fa-check"></i> Uploaded</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <label for="cv">Current CV ( pdf, jpg, jpeg, png )</label><br>
                                                    <input id="cv" name="cv" type="file">
                                                    @if ($errors->has('cv'))
                                                        <div class="help-block">
                                                            <strong>{{ $errors->first('cv') }}</strong>
                                                        </div>
                                                    @endif
                                                    @if($student->cv)
                                                        <span class="badge badge-success"> <i class="fa fa-check"></i> Uploaded</span>
                                                    @endif
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
                                        <a href="{{ url('/students/register/admission-requirement') }}" class="btn btn-alt-secondary">
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
