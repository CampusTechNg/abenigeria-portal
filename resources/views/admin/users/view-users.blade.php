@extends('layouts.master')

@section('page_css_plugin')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
    {{-- Main Container --}}
    <main id="main-container">
        {{-- Page Content --}}
        <div class="content">
            <h2 class="content-heading d-print-none">Registered Uers</h2>
                       
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">List users</h3>
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
                                    <th style="width: 25%;">Name</th>
                                    <th style="width: 25%;">Email</th>
                                    <th style="width: 10%;">Role</th>
                                    <th style="width: 20%;">Date</th>
                                    <th class="text-center" style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)                    
                                    <tr>
                                        <td class="font-w600">
                                            {{ $user->firstname }}
                                            {{ $user->lastname }}
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            {{ $user->role }}
                                        </td>
                                        
                                        <td>
                                            <strong>Created:</strong> 
                                            <span data-toggle="tooltip" title="{{ $user->created_at->toFormattedDateString() }} at {{ $user->created_at->format('h:i A') }}"> {{ $user->created_at->diffForHumans() }} </span>
                                            <br>
                                            <strong>Updated:</strong> 
                                            <span data-toggle="tooltip" title="{{ $user->updated_at->toFormattedDateString() }} at {{ $user->updated_at->format('h:i A') }}"> {{ $user->updated_at->diffForHumans() }} </span> 
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" href="{{ url('/users/' . $user->uid . '/edit') }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                                
                                            <form id="delete-user" action="{{ url('/users/' . $user->uid) }}" method="POST" style="display: inline-block;" onclick='return confirm("Are you sure you want to delete user?");'>
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
