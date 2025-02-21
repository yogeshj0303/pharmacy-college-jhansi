@extends('layouts.master')

@section('title', 'Media Images')

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
@slot('li_1') image @endslot
@slot('title') image Data @endslot
@endcomponent

<div class="row">
    <div class="col-md-7">
        <!-- Table for Images and Years -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Images</h5>
            </div>
            <div class="card-body">
            <div style="overflow-x: auto;">

                <table id="imageTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>SNO</th>

                            <th>Image</th>
                            <th>Year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $sno = 1;
                        @endphp 
                        <!-- Dynamic Data Will Be Populated Here -->
                        @foreach($images as $index => $image)
                        <tr>
                        <td>{{ $images->firstItem() + $index }}</td>
                            <td>
                            <a href="{{ asset(''.$image->image) }}" target="_blank" rel="noopener noreferrer">
    <img src="{{ asset(''.$image->image) }}" alt="Image" style="width: 100px; height: 100px;">
</a>

                            </td>
                            <td>{{ $image->year }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm editImage" data-id="{{ $image->id }}"    data-image="{{ asset($image->image) }}"  data-year="{{ $image->year }}">Edit</button>
                                <button class="btn btn-danger btn-sm deleteImage" data-id="{{ $image->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination-wrapper">
            {{ $images->links('pagination::bootstrap-4') }}
        </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-md-5">
        <!-- Form for Adding Image -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add New Image</h5>
            </div>
            <div class="card-body">
            <form id="imageForm" method="POST" action="{{ route('mediaimage.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="year" class="form-label">Select Year</label>
        <select class="form-control" id="year" name="year" required>
            @for($i = 2020; $i <= 2025; $i++)
                <option value="{{ $i }}-{{ $i + 1 }}">{{ $i }}-{{ $i + 1 }}</option>
            @endfor
        </select>
        @error('year')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Upload Image</label>
        <input type="file" class="form-control" id="image" name="image"  onchange="previewImage(event)">
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="imagePreview" class="form-label"></label>
        <img id="imagePreview" src="" alt="Image Preview" style="max-width: 200px; display: none;">
    </div>

    <button type="submit" class="btn btn-primary">Upload Image</button>
</form>

            </div>
        </div>
    </div>
   
</div>

<!-- Edit Image Modal -->
<div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="editImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editImageModalLabel">Edit Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editImageForm">
                    @csrf
                    <input type="hidden" id="imageId">
                    <div class="mb-3">
                        <label for="editYear" class="form-label">Year</label>
                        <select class="form-control" id="editYear" name="year" required>
                            @for($i = 2020; $i <= 2025; $i++)
                            <option value="{{ $i }}-{{ $i + 1 }}">{{ $i }}-{{ $i + 1 }}</option>
                            @endfor
                        </select>
                        <span class="text-danger" id="yearError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="editImage" name="image" onchange="previewImageedit(event)">
                        <img id="editImagePreview" src="" alt="Image Preview" style="max-width: 100px; display: none;" />

                        <span class="text-danger" id="imageError"></span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
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
<script>
    function previewImage(event) {
        const image = document.getElementById('imagePreview');
        const file = event.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                image.src = reader.result;
                image.style.display = "block"; // Show the image preview
            };
            reader.readAsDataURL(file);
        }
    }

    function previewImageedit(event) {
    var file = event.target.files[0]; // Get the selected file
    var reader = new FileReader();

    reader.onload = function(e) {
        // When the file is loaded, set the preview image source
        var preview = document.getElementById('editImagePreview');
        preview.src = e.target.result;
        preview.style.display = 'block';  // Show the image preview
    }

    if (file) {
        reader.readAsDataURL(file);  // Read the file as a data URL
    }
}

</script>

<script>
    $(document).ready(function () {
        // Initialize DataTable

        // Edit Image
        $(document).on('click', '.editImage', function () {
            var id = $(this).data('id');
            var image = $(this).data('image');
            var year = $(this).data('year');
            $('#imageId').val(id);
            $('#editYear').val(year);
            $('#editImagePreview').attr('src', image).show();  // Show the preview image in the modal

            $('#editImageModal').modal('show');
        });

        // Save Changes
        $('#editImageForm').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_method', 'PUT');
            $.ajax({
                url: '{{ route('mediaimage.update', '') }}/' + $('#imageId').val(),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
    if (response.success) {
        // Close the modal
        $('#editImageModal').modal('hide');
        
        // Show success message with SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Image updated successfully!',
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

        // Delete Image
        $(document).on('click', '.deleteImage', function () {
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
                        url: '{{ route('mediaimage.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your image has been deleted.',
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
