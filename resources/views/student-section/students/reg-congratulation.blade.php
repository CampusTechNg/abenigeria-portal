@extends('layouts.master')

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading">Registration Completed</h2>
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <div class="py-50 text-center">
                                <div class="item item-2x item-circle bg-earth-light mx-auto mb-20">
                                    <i class="fa fa-check text-white"></i>
                                </div>

                                <div class="font-size-h4 font-w600">Registration Completed</div>
                                <div class="text-muted">
                                    Thanks for registering. <br> Please check your email for a confirmation mail.
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
