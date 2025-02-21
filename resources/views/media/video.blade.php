@extends('layouts.master')  
@section('title', 'Video')

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
@slot('li_1') Video @endslot  
@slot('title') Video Data @endslot  
@endcomponent  

<div class="row">  
<div class="col-md-7">
    <!-- Table for Links and Years -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Video List</h5>
        </div>
        <div class="card-body">
            <div style="overflow-x: auto;">
                <table id="videoTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Link</th>
                            <th>Year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <!-- Dynamic Data Will Be Populated Here -->
                        @foreach($videos as  $index => $video)
                        <tr>
                        <td>{{ $videos->firstItem() + $index }}</td>
                            <td>
                                <a href="{{ $video->link }}" target="_blank" rel="noopener noreferrer">
                                    {{ $video->link }}
                                </a>
                            </td>
                            <td>{{ $video->year }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm editVideo" data-id="{{ $video->id }}" data-link="{{ $video->link }}" data-year="{{ $video->year }}">Edit</button>
                                <button class="btn btn-danger btn-sm deleteVideo" data-id="{{ $video->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper">
            {{ $videos->links('pagination::bootstrap-4') }}
        </div>
            </div>
        </div>
    </div>
</div>


    <div class="col-md-5">  
          

        <div class="card">  
            <div class="card-header">  
                <h5 class="card-title">Add New Video</h5>  
            </div>  
            <div class="card-body">  
            <form id="videoForm" method="POST" action="{{ route('video.store') }}">  
    @csrf  

    <div class="mb-3">  
        <label for="year" class="form-label">Select Year</label>  
        <select class="form-control" id="year" name="year" >  
            @for($i = 2020; $i <=2025; $i++)  
                <option value="{{ $i }}-{{ $i + 1 }}">{{ $i }}-{{ $i + 1 }}</option>  
            @endfor  
        </select>  
        @error('year')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>  

    <div class="mb-3">  
        <label for="link" class="form-label">YouTube Link</label>  
        <input type="text" class="form-control" id="link" name="link" placeholder="Enter YouTube link" >  
        @error('link')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>  

    <button type="submit" class="btn btn-primary">Upload Video</button>  
</form>

            </div>  
        </div>  
    </div>  
</div>  
<div class="modal fade" id="editVideoModal" tabindex="-1" aria-labelledby="editVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editVideoModalLabel">Edit Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editVideoForm">
                    @csrf
                    <input type="hidden" id="videoId">
                    <div class="mb-3">
                        <label for="editLink" class="form-label">Video Link</label>
                        <input type="text" class="form-control" id="editLink" name="link" >
                        <span class="text-danger" id="linkError"></span>

                    </div>
                    <div class="mb-3">
                        <label for="editYear" class="form-label">Year</label>
                        <select class="form-control" id="editYear" name="year" required>
                            @for($i = 2020; $i <= 2025; $i++)  
                                <option value="{{ $i }}-{{ $i + 1 }}">{{ $i }}-{{ $i + 1 }}</option>
                            @endfor
                        </select>
                        <span class="text-danger" id="yearError"></span>

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
        // Initialize DataTable
    // Open Edit Modal and Populate Data
$(document).on('click', '.editVideo', function() {

    const videoId = $(this).data('id');
    const videoLink = $(this).data('link');
    const videoYear = $(this).data('year');
    
    // Populate the modal with the video data
    $('#videoId').val(videoId);
    $('#editLink').val(videoLink);
    $('#editYear').val(videoYear);

    // Show the modal
    $('#editVideoModal').modal('show');
});
});



// Handle form submission for editing video
$('#editVideoForm').on('submit', function(e) {
    e.preventDefault();
    
    const videoId = $('#videoId').val();
    const videoLink = $('#editLink').val();
    const videoYear = $('#editYear').val();
    
    $.ajax({
        url: `/video/${videoId}`,
        type: 'PUT',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            link: videoLink,
            year: videoYear,
        },
        success: function(response) {
            Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "Link updated successfully!",
                        showConfirmButton: false,
                        timer: 2000
                    });

            $('#editVideoModal').modal('hide'); // Close modal
            location.reload(); // Reload the page to reflect changes
        },
        error: function(xhr) {
            const errors = xhr.responseJSON.errors;
            
            // Display errors below the fields
            if (errors.link) {
                $('#linkError').text(errors.link[0]);
            }
            if (errors.year) {
                $('#yearError').text(errors.year[0]);
            }
        }
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
                        url: '{{ route('video.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "Link Delete successfully!",
                        showConfirmButton: false,
                        timer: 2000
                    });

                                location.reload();
                            
                        }
                    });
                }
            });
        });
</script>  
@endsection  
