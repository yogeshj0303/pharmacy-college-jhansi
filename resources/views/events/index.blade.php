@extends('layouts.master')

@section('title', 'Events')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Events @endslot
@slot('title') Event Data @endslot
@endcomponent

<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Events</h5>
            </div>
            <div class="card-body">
                <div style="overflow-x: auto;">
                    <table id="eventTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $index => $event)
                            <tr>
                                <td>{{ $events->firstItem() + $index }}</td>
                                <td>
                                    <a href="{{ asset($event->image) }}" target="_blank">
                                        <img src="{{ asset($event->image) }}" alt="Event Image" style="width: 80px; height: 80px;">
                                    </a>
                                </td>
                                <td>{{ $event->name }}</td>
                                <td> <button class="btn btn-info btn-sm view-description" 
                        data-bs-toggle="modal" 
                        data-bs-target="#descriptionModal" 
                        data-description="{{ $event->description }}">
                        <i class="fas fa-eye"></i>
                    </button>
                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm editEvent" data-id="{{ $event->id }}" data-name="{{ $event->name }}" data-description="{{ $event->description }}" data-image="{{ asset($event->image) }}">Edit</button>
                                    <button class="btn btn-danger btn-sm deleteImage " data-id="{{ $event->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">
                        {{ $events->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add New Event</h5>
            </div>
            <div class="card-body">
            <form id="eventForm" method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Event Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Upload Image <span class="text-danger">*</span></label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage(event)">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <img id="imagePreview" src="" alt="Image Preview" style="width: 200px; display: none; margin-top: 10px;">
    </div>

    <button type="submit" class="btn btn-primary">Add Event</button>
</form>

            </div>
        </div>
    </div>
</div>

<!-- Edit Event Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editEventForm">
                    @csrf
                    <input type="hidden" id="eventId">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="editName" name="name" >
                    </div>
                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="editImage" name="image" onchange="previewImageEdit(event)">
                        <img id="editImagePreview" src="" alt="Image Preview" style="width: 100px; height: 100px; display: none;" />
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Description Modal -->
<div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel">Event Description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="eventDescription"></p>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.view-description').on('click', function() {
            var description = $(this).data('description');
            $('#eventDescription').text(description);
        });
    });
</script>

<script>
    function previewImage(event) {
        let image = document.getElementById('imagePreview');
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function () {
                image.src = reader.result;
                image.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    }
    function previewImageEdit(event) {
        let file = event.target.files[0];
        let reader = new FileReader();
        reader.onload = function (e) {
            let preview = document.getElementById('editImagePreview');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>


<script>
    $(document).ready(function () {
        // Edit button click event
        $(document).on("click", ".editEvent", function () {
            let eventId = $(this).data("id");
            let eventName = $(this).data("name");
            let eventDescription = $(this).data("description");
            let eventImage = $(this).data("image");

            $("#eventId").val(eventId);
            $("#editName").val(eventName);
            $("#editDescription").val(eventDescription);

            if (eventImage) {
                $("#editImagePreview").attr("src", eventImage).show();
            } else {
                $("#editImagePreview").hide();
            }

            $("#editEventModal").modal("show");
        });

        // Form submit event
        $("#editEventForm").submit(function (e) {
            e.preventDefault();

            let eventId = $("#eventId").val();
            let formData = new FormData(this);
            formData.append("_method", "PUT"); // Laravel में PUT method के लिए

            $.ajax({
                url: "/event/" + eventId, // Update route
                type: "POST",  // Laravel PUT request के लिए
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "Event updated successfully!",
                        showConfirmButton: false,
                        timer: 2000
                    });

                    $("#editEventModal").modal("hide");
                    setTimeout(function () {
                        location.reload(); // Reload the page after success
                    }, 2000);
                },
                error: function(xhr) {
    if (xhr.status === 422) {
        var errors = xhr.responseJSON.errors;
        $("#editEventModal .error-message").remove(); // पहले से मौजूद errors हटाएं

        $.each(errors, function(field, messages) {
            let inputField = $("#editEventModal [name='" + field + "']"); // Name attribute से field खोजें
            if (inputField.length > 0) {
                inputField.after('<div class="text-danger error-message">' + messages[0] + "</div>");
            }
        });
    }  else {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Something went wrong. Please try again.",
                        });
                    }
                },
            });
        });
    });
</script>

<script>
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
                        url: '{{ route('event.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Event has been deleted.',
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