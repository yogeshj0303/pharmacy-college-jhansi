@extends('layouts.master')

@section('title', 'Result Analysis')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!-- DataTables Responsive CSS -->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Enquiry @endslot
@slot('title') Enquiry Data @endslot
@endcomponent

<div class="row">
    <div class="col-md-12">
        <!-- Table for Enquiries -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Enquiry Data</h5>
            </div>
            <div class="card-body">
                <div style="overflow-x: auto;">
                    <table id="enquiryTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                            <th>SNO</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Program</th>
                                <th>Course</th>
                                <th>Specialization</th>
                                <th>JEE Mains</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Enquiry as $index => $enquiry)
                                <tr>
                                <td>{{ $Enquiry->firstItem() + $index }}</td>

                                    <td>{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td>{{ $enquiry->mobile_no }}</td>
                                    <td>{{ $enquiry->state }}</td>
                                    <td>{{ $enquiry->city }}</td>
                                    <td>{{ $enquiry->program }}</td>
                                    <td>{{ $enquiry->course }}</td>
                                    <td>{{ $enquiry->specialization }}</td>
                                    <td>{{ $enquiry->jee_mains }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination Links -->
                    <div class="pagination-wrapper">
                        {{ $Enquiry->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
