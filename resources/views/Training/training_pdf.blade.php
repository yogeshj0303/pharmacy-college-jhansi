@extends('layouts.master')

@section('title', 'Training & placement document')

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
@slot('li_1') Training & placement @endslot
@slot('title') Training & placement document @endslot
@endcomponent

<div class="row">
    <div class="col-md-7">
        <!-- Table for Documents -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Training & placement document</h5>
            </div>
            <div class="card-body">
            <div style="overflow-x: auto;">

                <table id="documentTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SNO</th>
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
                        @foreach($documents as $index =>  $document)
                        <tr>
                        <td>{{ $documents->firstItem() + $index }}</td>
                            <td>{{ $document->title }}</td>
                            <td>
                                <a href="{{ asset(''.$document->document) }}" target="_blank" rel="noopener noreferrer">
                                    View Document
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm editDocument" data-id="{{ $document->id }}" data-title="{{ $document->title }}" data-document="{{ asset($document->document) }}">Edit</button>
                                <button class="btn btn-danger btn-sm deleteDocument" data-id="{{ $document->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination-wrapper">
            {{ $documents->links('pagination::bootstrap-4') }}
        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <!-- Form for Adding Document -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add  Training & placement document</h5>
            </div>
            <div class="card-body">
                <form id="documentForm" method="POST" action="{{ route('trainingdocument.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label"> Title</label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

                    <div class="mb-3">
    <label for="document" class="form-label">Upload Document</label>
    <input type="file" class="form-control" id="document" name="document"  accept=".pdf" onchange="previewDocument(event)">
</div>
@error('document')
            <div class="text-danger">{{ $message }}</div>
        @enderror

      

                    <button type="submit" class="btn btn-primary">Upload Document</button>
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
                <h5 class="modal-title" id="editDocumentModalLabel">Edit Training & placement document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDocumentForm">
                    @csrf
                    <input type="hidden" id="documentId">
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Newsletter Title</label>
                        <input type="text" class="form-control" id="editTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="editDocument" class="form-label">Newsletter document</label>
                        <input type="file" class="form-control" id="editDocument" name="document" accept=".pdf">
                        <a id="editDocumentPreview" href="" target="_blank" ></a>

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
        $(document).on('click', '.editDocument', function () {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var document = $(this).data('document');
            $('#documentId').val(id);
            $('#editTitle').val(title);
            if (document) {
                $('#editDocumentPreview').text('View Document')
            .attr('href', document)       // Set the href attribute to the document URL
            .attr('target', '_blank')      // Open the link in a new tab
            .show();  
            
            $('#editDocumentPreviewContainer').show();  // Show the document preview section
    } else {
        $('#editDocumentPreviewContainer').hide();  // Hide the document preview section if no document is available
    }
            $('#editDocumentModal').modal('show');
        });

        // Save Changes
        $('#editDocumentForm').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_method', 'PUT');
            $.ajax({
                url: '{{ route('trainingdocument.update', '') }}/' + $('#documentId').val(),
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
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        // Delete Document
        $(document).on('click', '.deleteDocument', function () {
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
                        url: '{{ route('trainingdocument.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                              
                                location.reload();
                            
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
