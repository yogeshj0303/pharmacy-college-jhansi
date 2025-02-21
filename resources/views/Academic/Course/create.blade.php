@extends('layouts.master')

@section('title', 'Courses')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Courses @endslot
@slot('title') Course Data @endslot
@endcomponent

<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">

                <h5 class="card-title">Courses</h5>

            </div>

            <div class="card-body">
                <table id="courseTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Course Name</th>
                            <th>Mode</th>
                            <th>Duration</th>
                            <th>Seats</th>
                            <th>Entrance Test</th>
                            <th>Description</th>
                            <th>Eligibility</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $index => $course)
                        <tr>
                            <td>{{ $courses->firstItem() + $index }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->mode }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->seats }}</td>
                            <td>{{ $course->entrance_test }}</td>
                            <td class="text-center">
    <i class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#descriptionModal" data-description="{{ $course->description }}" style="background-color:rgb(6, 83, 28); padding: 5px; color:white"></i>
</td>

                            <td>{{ $course->eligibility }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm editCourse" data-id="{{ $course->id }}">Edit</button>
                                <button class="btn btn-danger btn-sm deleteImage mt-2" data-id="{{ $course->id }}">Delete</button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper">
                    {{ $courses->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add New Course</h5>
            </div>
            <div class="card-body">
            <form id="courseForm" method="POST" action="{{ route('courses.store') }}">
    @csrf
    <div class="mb-3">
        <label for="course_name" class="form-label">Course Name</label>
        <input type="text" class="form-control @error('course_name') is-invalid @enderror" 
               id="course_name" name="course_name" value="{{ old('course_name') }}" >
        @error('course_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="mode" class="form-label">Mode</label>
        <input type="text" class="form-control @error('mode') is-invalid @enderror" 
               id="mode" name="mode" value="{{ old('mode') }}">
        @error('mode')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control @error('duration') is-invalid @enderror" 
               id="duration" name="duration" value="{{ old('duration') }}">
        @error('duration')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="seats" class="form-label">Seats</label>
        <input type="number" class="form-control @error('seats') is-invalid @enderror" 
               id="seats" name="seats" value="{{ old('seats') }}">
        @error('seats')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="entrance_test" class="form-label">Entrance Test</label>
        <input type="text" class="form-control @error('entrance_test') is-invalid @enderror" 
               id="entrance_test" name="entrance_test" value="{{ old('entrance_test') }}">
        @error('entrance_test')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" 
                  id="description" name="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="eligibility" class="form-label">Eligibility</label>
        <input type="text" class="form-control @error('eligibility') is-invalid @enderror" 
               id="eligibility" name="eligibility" value="{{ old('eligibility') }}">
        @error('eligibility')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add Course</button>
</form>

            </div>
        </div>
    </div>
</div>
<!-- Modal to show description -->
<div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel">Course Description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>
</div>

<!-- Edit Course Modal -->
<div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCourseModalLabel">Edit Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCourseForm">
                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="edit_course_name" name="course_name" value="{{ old('course_name') }}" required>
                        @error('course_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mode" class="form-label">Mode</label>
                        <input type="text" class="form-control" id="edit_mode" name="mode" value="{{ old('mode') }}">
                        @error('mode')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="edit_duration" name="duration" value="{{ old('duration') }}">
                        @error('duration')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="seats" class="form-label">Seats</label>
                        <input type="number" class="form-control" id="edit_seats" name="seats" value="{{ old('seats') }}">
                        @error('seats')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="entrance_test" class="form-label">Entrance Test</label>
                        <input type="text" class="form-control" id="edit_entrance_test" name="entrance_test" value="{{ old('entrance_test') }}">
                        @error('entrance_test')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="edit_description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="eligibility" class="form-label">Eligibility</label>
                        <input type="text" class="form-control" id="edit_eligibility" name="eligibility" value="{{ old('eligibility') }}">
                        @error('eligibility')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" id="course_id" name="course_id">
                    <button type="submit" class="btn btn-primary">Update Course</button>
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
    $(document).on('click', '.fa-eye', function() {
    var description = $(this).data('description');
    $('#modalDescription').text(description);
});

    $(document).ready(function() {
    // Open the modal when the edit button is clicked
    $(document).on('click', '.editCourse', function() {
        var courseId = $(this).data('id');
        
        // Fetch course data via AJAX
        $.ajax({
            url: '/courses/' + courseId + '/edit', // Update the route if necessary
            method: 'GET',
            success: function(response) {
                $('#edit_course_name').val(response.course.course_name);
                $('#edit_mode').val(response.course.mode);
                $('#edit_duration').val(response.course.duration);
                $('#edit_seats').val(response.course.seats);
                $('#edit_entrance_test').val(response.course.entrance_test);
                $('#edit_description').val(response.course.description);
                $('#edit_eligibility').val(response.course.eligibility);
                $('#course_id').val(response.course.id);

                // Show the modal
                $('#editCourseModal').modal('show');
            }
        });
    });
    $('#editCourseForm').submit(function(e) {
    e.preventDefault();
    
    var formData = $(this).serialize();
    $('.text-danger').remove();

    $.ajax({
        url: '/courses/' + $('#course_id').val(),
        method: 'PUT',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // Include the CSRF token
        },
        success: function(response) {
            $('#editCourseModal').modal('hide');
            var row = $('#courseTable').find('tr').each(function() {
                var currentRow = $(this);
                var currentCourseId = currentRow.find('.editCourse').data('id');
                Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Course updated successfully!',
        })

                if (currentCourseId == response.course.id) {
                    currentRow.find('td').eq(1).text(response.course.course_name);
                    currentRow.find('td').eq(2).text(response.course.mode);
                    currentRow.find('td').eq(3).text(response.course.duration);
                    currentRow.find('td').eq(4).text(response.course.seats);
                    currentRow.find('td').eq(5).text(response.course.entrance_test);
                    currentRow.find('td').eq(6).html('<i class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#descriptionModal" data-description="' + response.course.description + '" style="background-color:rgb(6, 83, 28); padding: 5px; color:white"></i> ');
                    currentRow.find('td').eq(7).text(response.course.eligibility);
                }

            });
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                var errors = xhr.responseJSON.errors;
                for (var field in errors) {
                    var errorMessage = errors[field][0];
                    var fieldElement = $('input[name="' + field + '"], textarea[name="' + field + '"]');
                    fieldElement.after('<div class="text-danger">' + errorMessage + '</div>');
                }
            } else {
                alert('Something went wrong! Please try again.');
            }
        }
    });
});


});

</script>

<script>
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
                        url: '{{ route('courses.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Course has been deleted.',
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
