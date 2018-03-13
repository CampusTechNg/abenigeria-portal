@extends('layouts.master')

@section('page_css_plugin')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading d-print-none">Prospective Students</h2>
                       
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">List of prospective students</h3>
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

                        <table class="table table-bordered table-striped table-vcenter table-responsive js-dataTable-full-pagination">
                            <thead>
                                <tr>
                                    <th style="width: 23%;">Name</th>
                                    <th style="width: 8%;">Gender</th>
                                    <th style="width: 23%;">Contact</th>
                                    <th style="width: 9%;">Status</th>
                                    <th style="width: 19%;">Date</th>
                                    <th class="text-center" style="width: 18%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)                    
                                    <tr>
                                        <td class="font-w600">
                                            {{ $student->lastname }}
                                            {{ $student->firstname }}
                                            {{ $student->othername }}
                                        </td>
                                        <td>{{ $student->gender }}</td>
                                        <td>
                                            {{ $student->email }} <br>
                                            {{ $student->phone }}
                                        </td>
                                        <td>
                                            @if($student->is_completed)
                                                <span class="badge badge-info">Completed</span>
                                            @else
                                                <span class="badge badge-warning">Pending</span> <br>
                                                {{-- <a href="{{ url('/students/progress/'. $student->uid) }}">view progress</a> --}}
                                            @endif
                                        </td>
                                        <td>
                                            <strong>Created:</strong> 
                                            <span data-toggle="tooltip" title="{{ $student->created_at->toFormattedDateString() }} at {{ $student->created_at->format('h:i A') }}"> {{ $student->created_at->diffForHumans() }} </span>
                                            <br>
                                            <strong>Updated:</strong> 
                                            <span data-toggle="tooltip" title="{{ $student->updated_at->toFormattedDateString() }} at {{ $student->updated_at->format('h:i A') }}"> {{ $student->updated_at->diffForHumans() }} </span> 
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Form" href="{{ url('/students/' . $student->uid) }}">
                                                <i class="fa fa-user"></i>
                                            </a>

                                            <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" href="{{ url('/students/' . $student->uid . '/edit') }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                                
                                            <form id="delete-student" action="{{ url('/users/' . $student->user_id . '/student') }}" method="POST" style="display: inline-block;" onclick='return confirm("Are you sure you want to delete student?");'>
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection

@section('page_js_plugin')
<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endsection

@section('page_js')
<script src="{{ asset('assets/js/pages/be_tables_datatables.js') }}"></script>
@endsection
