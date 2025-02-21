@extends('layouts.master')
@section('title', 'Notice Board')


@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title') | Pharmacy College Management</title>

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Notice Board @endslot
@slot('title') Notice @endslot
@endcomponent

<div class="row">
    <!-- Notices Table -->
    <div class="col-12 col-md-7">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Notices</h4>
            </div>
            <div class="card-body">
            <div style="overflow-x: auto;">

                <table class="table table-bordered table-striped" id="noticeTable">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notices as $index => $notice)
                        <tr>
                        <td>{{ $notices->firstItem() + $index }}</td>
                        <td>{{ $notice->category }}</td>
                            <td>{{ $notice->title }}</td>
                            <td>
                                @if($notice->upload_pdf)
                                <a href="{{ asset(''.$notice->upload_pdf) }}" target="_blank" class="">View Document</a>
                                @else
                                N/A
                                @endif
                            </td>
                            <td>
    <div class="d-flex gap-2">
        <button class="btn btn-primary btn-sm editNotice" 
                data-id="{{ $notice->id }}" 
                data-category="{{ $notice->category }}" 
                data-title="{{ $notice->title }}"  
                data-pdf="{{ asset($notice->upload_pdf) }}">
            Edit
        </button>
        
        <button class="btn btn-danger btn-sm deleteVideo" data-id="{{ $notice->id }}">
            Delete
        </button>
    </div>
</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper">
            {{ $notices->links('pagination::bootstrap-4') }}
        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Notice Form -->
    <div class="col-12 col-md-5">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Add Notice</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('notices.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Select Category</option>
                            <option value="News & Event" {{ old('category') == 'News & Event' ? 'selected' : '' }}>News & Event</option>
                            <option value="Notice & Announcement" {{ old('category') == 'Notice & Announcement' ? 'selected' : '' }}>Notice & Announcement</option>
                        </select>
                        @error('category')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="upload_pdf" class="form-label">Upload PDF</label>
                        <input type="file" name="upload_pdf" id="upload_pdf" class="form-control">
                        @error('upload_pdf')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add Notice</button>
                </form>
            </div>
        </div>
    </div>
</div>










<div class="modal fade" id="editNoticeModal" tabindex="-1" aria-labelledby="editNoticeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="editNoticeForm" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Spoofing the PUT method -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNoticeModalLabel">Edit Notice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_notice_id" name="id">
                    <div class="mb-3">
    <label for="edit_category" class="form-label">Category</label>
    <select class="form-control" id="edit_category" name="category" required>
        <option value="">Select Category</option>
        <option value="News & Event">News & Event</option>
        <option value="Notice & Announcement">Notice & Announcement</option>
    </select>
</div>

                    <div class="mb-3">
                        <label for="edit_title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edit_title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_pdf" class="form-label">PDF File</label>
                        <input type="file" class="form-control" id="edit_pdf" name="upload_pdf">
                    </div>
                    <div id="current_pdf"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>

<script>
   $(document).ready(function() {
    // Initialize DataTable

    // Edit button click
    $('.editNotice').click(function() {
        var id = $(this).data('id');
        var category = $(this).data('category');
        var title = $(this).data('title');
        var pdf = $(this).data('pdf');

        // Populate modal fields with current data
        $('#edit_notice_id').val(id);
    
    $('#edit_category').val(category);
            $('#edit_title').val(title);
        
        // Show current PDF link if exists
        if (pdf) {
            $('#current_pdf').html(`<a href="${pdf}" target="_blank">View Current PDF</a>`);
        } else {
            $('#current_pdf').html('No file uploaded');
        }

        // Show modal
        $('#editNoticeModal').modal('show');
    });

    // Handle form submission for updating notice
    $('#editNoticeForm').on('submit', function(e) {
        e.preventDefault();

        // Create FormData from the form
        var formData = new FormData(this);
        var noticeId = $('#edit_notice_id').val();

        // Send AJAX request to update notice
        $.ajax({
            url: `/notices/${noticeId}`,
            type: 'POST',  // Using POST but with method spoofing
            data: formData,
            processData: false,  // Don't process the data
            contentType: false,  // Don't set content type as jQuery will do it for FormData
            success: function(response) {
                Swal.fire("Updated!", "Notice updated successfully.", "success");
                $('#editNoticeModal').modal('hide');
                location.reload(); 
            },
            error: function(response) {
                Swal.fire("Error!", "Something went wrong.", "error");
            }
        });
    });
});
</script>


<script>  
   

   $(document).on('click', '.deleteVideo', function () {
            var id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('notices.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your notice has been deleted.',
                                    'success'
                                );
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
</script>  









@endsection
