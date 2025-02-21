@extends('layouts.master')
@section('title', 'Naac Category')

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
@slot('li_1') Naac @endslot
@slot('title') Naac Data @endslot
@endcomponent

<div class="row">
    <div class="col-md-7">
        <!-- Table for Documents -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">NAAC Categories</h5>
            </div>
            <div class="card-body">
            <div style="overflow-x: auto;">

                <table id="documentTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sno = 1;
                        @endphp
                        @foreach($naacCategories as $index => $category)
                        <tr>
                        <td>{{ $naacCategories->firstItem() + $index }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm editDocument" data-id="{{ $category->id }}" data-title="{{ $category->category_name }}">Edit</button>
                                <button class="btn btn-danger btn-sm deleteDocument" data-id="{{ $category->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper">
            {{ $naacCategories->links('pagination::bootstrap-4') }}
        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Naac Category</h5>
            </div>
            <div class="card-body">
                <form id="documentForm" method="POST" action="{{ route('naac-category.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name') }}" required>
                    </div>
                    @error('category_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
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
                <h5 class="modal-title" id="editDocumentModalLabel">Edit Naac Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDocumentForm">
                    @csrf
                    <input type="hidden" id="documentId">
                    <div class="mb-3">
                        <label for="editCategoryName" class="form-label">Naac Category</label>
                        <input type="text" class="form-control" id="editCategoryName" name="category_name" required>
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
    $(document).ready(function () {
      
        $(document).on('click', '.editDocument', function () {
            var id = $(this).data('id');
            var title = $(this).data('title');
            $('#documentId').val(id);
            $('#editCategoryName').val(title);
            $('#editDocumentModal').modal('show');
        });

        // Save Changes
        $('#editDocumentForm').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_method', 'PUT');
            $.ajax({
                url: '{{ route('naac-category.update', '') }}/' + $('#documentId').val(),
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
                            text: 'Naac Category updated successfully!',
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
                        url: '{{ route('naac-category.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    ' Naac Category  has been deleted.',
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
