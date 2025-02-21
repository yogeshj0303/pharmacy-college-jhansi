@extends('layouts.master')

@section('title', 'Career Data')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Careers @endslot
@slot('title') Career Applications @endslot
@endcomponent

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Career Applications</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="careerTable">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Qualification</th>
                                <th>Experience</th>
                                <th>Applied For Position</th>
                                <th>Specialization</th>
                                <th>Resume</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($careers as $key => $career)
                                <tr>
                                    <td>{{ $careers->firstItem() + $key }}</td>

                                    <td>{{ $career->first_name }}</td>
                                    <td>{{ $career->last_name }}</td>
                                    <td>{{ $career->contact_no }}</td>
                                    <td>{{ $career->email }}</td>
                                    <td>{{ $career->qualification }}</td>
                                    <td>{{ $career->experience }}</td>
                                    <td>{{ $career->applied_for }}</td>
                                    <td>{{ $career->specialization }}</td>
                                    <td>
                                        @if($career->resume)
                                            <a href="{{ asset('' . $career->resume) }}" target="_blank">View Resume</a>
                                        @else
                                            No Resume
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
                <div class="pagination-wrapper">
                    {{ $careers->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>

<script>
   

    @if(session('success'))
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        });
    @endif
</script>
@endsection
