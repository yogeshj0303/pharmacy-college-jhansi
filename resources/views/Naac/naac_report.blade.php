@extends('layouts.master')

@section('title', 'Naac Report')

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
@slot('li_1') NAAC  @endslot
@slot('title') NAAC Reports @endslot
@endcomponent
<div class="row">
    <div class="col-md-7">
        <!-- Table for Documents -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">NAAC Reports</h5>
            </div>
            <div class="card-body">
                <div style="overflow-x: auto;">
                    <table id="documentTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Document</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sno = 1;
                            @endphp
                            <!-- Dynamic Data Will Be Populated Here -->
                            @foreach($naacReports as $index => $report)
                            <tr>
                            <td>{{ $naacReports->firstItem() + $index }}</td>
                            <td>{{ $report->category->category_name ?? 'N/A' }}</td> <!-- Assuming category has a title field -->
                                <td>{{ $report->title }}</td>
                                <td>
                                    <a href="{{ asset(''.$report->document) }}" target="_blank" rel="noopener noreferrer">
                                        View Document
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm editReport" data-id="{{ $report->id }}" data-title="{{ $report->title }}"  data-category-id="{{ $report->category->id }}"  data-document="{{ asset($report->document) }}">Edit</button>
                                    <button class="btn btn-danger btn-sm deleteReport" data-id="{{ $report->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">
            {{ $naacReports->links('pagination::bootstrap-4') }}
        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <!-- Form for Adding Document -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add  NAAC Report</h5>
            </div>
            <div class="card-body">
            <form id="naacReportForm" method="POST" action="{{ route('naac-reports.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
        </select>
    </div>
    @error('category_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="title" class="form-label">Report Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
    </div>
    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="document" class="form-label">Upload Report Document</label>
        <input type="file" class="form-control" id="document" name="document" accept=".pdf" onchange="previewDocument(event)">
    </div>
    @error('document')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Upload Report</button>
</form>

            </div>
        </div>
    </div>
</div>

<!-- Edit Document Modal -->
<div class="modal fade" id="editDocumentModal" tabindex="-1" aria-labelledby="editDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDocumentModalLabel">Edit Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDocumentForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="documentId" name="id">
                    
                    <div class="mb-3">
                        <label for="editCategory_id" class="form-label">Category</label>
                        <select class="form-control" id="editCategory_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Report Title</label>
                        <input type="text" class="form-control" id="editTitle" name="title" value="{{ old('title') }}">
                    </div>
                    <span class="text-danger error-message" id="title_error"></span> <!-- Error Message -->

                    <div class="mb-3">
                        <label for="editDocument" class="form-label">Upload Report Document</label>
                        <input type="file" class="form-control" id="editDocument" name="document" accept=".pdf" onchange="previewDocument(event)">
                    </div>
                    @error('document')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div id="editDocumentPreviewContainer" style="display:none;">
                        <a id="editDocumentPreview" href="" target="_blank">View Document</a>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
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

<script>
    function previewDocument(event) {
        const preview = document.getElementById('documentPreview');
        preview.style.display = "block"; // Show the preview
        preview.textContent = event.target.files[0].name; // Display file name
    }

    function previewDocumentEdit(event) {
        const preview = document.getElementById('editDocumentPreview');
        preview.style.display = "block"; // Show the preview
        preview.textContent = event.target.files[0].name; // Display file name
    }

    $(document).ready(function () {
        // Initialize DataTable

        // Edit Document
      // Edit Document Button Click
      $(document).on('click', '.editReport', function () {
    var id = $(this).data('id');
    var title = $(this).data('title');
    var document = $(this).data('document');
    var category_id = $(this).data('category-id'); // Now correctly fetch category id

    // Set the form values
    $('#documentId').val(id);
    $('#editTitle').val(title);
    $('#editCategory_id').val(category_id); // Set the category id

    if (document) {
        $('#editDocumentPreview').text('View Document')
            .attr('href', document)       // Set the href attribute to the document URL
            .attr('target', '_blank')      // Open the link in a new tab
            .show();
        
        $('#editDocumentPreviewContainer').show();  // Show the document preview section
    } else {
        $('#editDocumentPreviewContainer').hide();  // Hide the document preview section if no document is available
    }

    // Show the modal
    $('#editDocumentModal').modal('show');
});


// Save Changes and Submit the Form via AJAX
$('#editDocumentForm').on('submit', function (e) {
    e.preventDefault();  // Prevent the default form submission
    var formData = new FormData(this);
    formData.append('_method', 'PUT'); // Add PUT method for update

    $.ajax({
        url: '{{ route('naac-reports.update', '') }}/' + $('#documentId').val(),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                // Close the modal
                $('#editDocumentModal').modal('hide');

                // Show success message with SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Document updated successfully!',
                    confirmButtonText: 'OK'
                }).then(function() {
                    // Reload the page after the user clicks 'OK'
                    location.reload();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'There was an issue updating the document.',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function (xhr) {
            console.log(xhr);
            $(".error-message").html(""); // Clear previous errors

    let errors = xhr.responseJSON.errors;

    $.each(errors, function(key, value) {
        $("#" + key + "_error").html(value[0]); // Show error under respective field
    });
            
        }
    });
});

        // Delete Document
        $(document).on('click', '.deleteReport', function () {
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
                        url: '{{ route('naac-reports.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                              
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    ' Naac Report  has been deleted.',
                                    'success'
                                );
                                location.reload();
                            }                            
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
