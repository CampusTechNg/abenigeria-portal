@extends('layouts.master')

@section('content')
    
    <main id="main-container">
        <div class="content">
            <h2 class="content-heading">Dashboard</h2>

            @if($status)

                <div class="row gutters-tiny js-appear-enabled animated fadeIn" data-toggle="appear">
                    

                    <div class="col-12">
                        <a class="block block-rounded block-bordered block-link-shadow text-center" href="students/register/profile">
                            <div class="block-content">
                                <p class="font-w600 text-primary">Continue to my registration</p>
                                {{-- <p class="mt-5">
                                    <i class="si si-badge fa-4x"></i>
                                </p>
                                <p class="font-w600">Badges</p> --}}
                            </div>
                        </a>
                    </div>
                </div>
                
                
                    {{-- <div class="col-md-4">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <div class="py-20 text-center">
                                    @if($status->step2)
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                    @else
                                        <div class="mb-20">
                                            <i class="fa fa-exclamation-circle fa-4x text-warning"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="font-size-h4 font-w600">Personal Information</div>
                                    @if($status->step2)
                                        <div class="text-muted">Completed</div>
                                    @else
                                        <div class="text-muted">Pending</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <div class="py-20 text-center">
                                    @if($status->step3)
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                    @else
                                        <div class="mb-20">
                                            <i class="fa fa-exclamation-circle fa-4x text-warning"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="font-size-h4 font-w600">Contact Information</div>
                                    @if($status->step3)
                                        <div class="text-muted">Completed</div>
                                    @else
                                        <div class="text-muted">Pending</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <div class="py-20 text-center">
                                    @if($status->step4)
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                    @else
                                        <div class="mb-20">
                                            <i class="fa fa-exclamation-circle fa-4x text-warning"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="font-size-h4 font-w600">Course Selection</div>
                                    @if($status->step4)
                                        <div class="text-muted">Completed</div>
                                    @else
                                        <div class="text-muted">Pending</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <div class="py-20 text-center">
                                    @if($status->step5)
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                    @else
                                        <div class="mb-20">
                                            <i class="fa fa-exclamation-circle fa-4x text-warning"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="font-size-h4 font-w600">Admission Requirement</div>
                                    @if($status->step5)
                                        <div class="text-muted">Completed</div>
                                    @else
                                        <div class="text-muted">Pending</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <div class="py-20 text-center">
                                    @if($status->step6)
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                    @else
                                        <div class="mb-20">
                                            <i class="fa fa-exclamation-circle fa-4x text-warning"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="font-size-h4 font-w600">Upload Documents</div>
                                    @if($status->step6)
                                        <div class="text-muted">Completed</div>
                                    @else
                                        <div class="text-muted">Pending</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <div class="py-20 text-center">
                                    @if($student->is_completed)
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                    @else
                                        <div class="mb-20">
                                            <i class="fa fa-exclamation-circle fa-4x text-warning"></i>
                                        </div>
                                    @endif
                                    
                                    <div class="font-size-h4 font-w600">Final Step</div>
                                    @if($student->is_completed)
                                        <div class="text-muted">Completed</div>
                                    @else
                                        <div class="text-muted">Pending</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>
            
            @else


            @endif

        </div>
    </main>
@endsection
