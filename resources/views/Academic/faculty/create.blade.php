@extends('layouts.master')

@section('title', 'Faculty Management')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Faculty @endslot
        @slot('title') Faculty Data @endslot
    @endcomponent

    <div class="row">
        <!-- Faculty Details (Show) -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Faculty List</h4>
                </div>
                <div class="card-body">
                    <table id="faculty_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>SNO</th>
                                <th>Faculty Name</th>
                                <th>Specialization</th>
                                <th>Designation</th>
                                <th>Year</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faculties as $index => $faculty)
                            <tr id="faculty_{{ $faculty->id }}">
    <td>{{ $faculties->firstItem() + $index }}</td>
    <td class="faculty-name">{{ $faculty->faculty_name }}</td>
    <td class="faculty-specialization">{{ $faculty->specialization }}</td>
    <td class="faculty-designation">{{ $faculty->designation }}</td>
    <td class="faculty-year">{{ $faculty->year }}</td>
    <td class="faculty-course">{{ $faculty->course->course_name }}</td>
    <td>
        <button class="btn btn-primary btn-sm editfaculty" 
                data-id="{{ $faculty->id }}" 
                data-faculty-name="{{ $faculty->faculty_name }}" 
                data-specialization="{{ $faculty->specialization }}" 
                data-designation="{{ $faculty->designation }}" 
                data-course-id="{{ $faculty->course_id }}" 
                data-year="{{ $faculty->year }}">
            Edit
        </button>
        <button class="btn btn-danger btn-sm deleteImage mt-2" data-id="{{ $faculty->id }}">
            Delete
        </button>
    </td>
</tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">
                    {{ $faculties->links('pagination::bootstrap-4') }}
                </div>
                </div>
            </div>
        </div>

        <!-- Add New Faculty -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Faculty</h4>
                </div>
                <div class="card-body">
                <form action="{{ route('faculty.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <!-- Faculty Name -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="faculty_name">Faculty Name</label>
                <input type="text" class="form-control" name="faculty_name" id="faculty_name" value="{{ old('faculty_name') }}" >
                @error('faculty_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Specialization -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" name="specialization" id="specialization" value="{{ old('specialization') }}" >
                @error('specialization')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Designation -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" value="{{ old('designation') }}" >
                @error('designation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Course -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="course_id">Course</label>
                <select class="form-control" name="course_id" id="course_id" >
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                    @endforeach
                </select>
                @error('course_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Year -->
        <div class="col-md-6">
            <div class="form-group">
                           <div class="mb-3">
    <label for="year" class="form-label">Academic Year</label>
    <input type="text" class="form-control" name="year" id="year" 
        value="{{ old('year', now()->year . '-' . (now()->year + 1)) }}" >
</div>


                @error('year')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="faculty_name">PDF Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" >
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="upload_pdf">Upload PDF</label>
                <input type="file" class="form-control" name="upload_pdf" id="upload_pdf" accept="application/pdf">
                @error('upload_pdf')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div> -->
    </div>

    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>

                  
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Faculty Modal -->
<div class="modal fade" id="editFacultyModal" tabindex="-1" role="dialog" aria-labelledby="editFacultyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFacultyModalLabel">Edit Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="editFacultyForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="faculty_name">Faculty Name</label>
                        <input type="text" class="form-control" name="faculty_name" id="edit_faculty_name" >
                    </div>
                    <div class="form-group">
                        <label for="specialization">Specialization</label>
                        <input type="text" class="form-control" name="specialization" id="edit_specialization" >
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" name="designation" id="edit_designation" >
                    </div>
                    <div class="form-group">
                        <label for="course_id">Course</label>
                        <select class="form-control" name="course_id" id="edit_course_id" >
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
    <label for="year" class="form-label">Academic Year</label>
    <input type="text" class="form-control" name="year" id="year" 
        value="{{ old('year', now()->year . '-' . (now()->year + 1)) }}" >
</div>

                   
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
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
    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    $(document).on('click', '.editfaculty', function() {
    // Get faculty details from data-* attributes
    var facultyId = $(this).data('id');
    var facultyName = $(this).data('faculty-name');
    var specialization = $(this).data('specialization');
    var designation = $(this).data('designation');
    var courseId = $(this).data('course-id');
    var year = $(this).data('year');

    // Set the form action to the correct URL (using the faculty ID)
    var actionUrl = '{{ route("faculty.update", ":id") }}'.replace(':id', facultyId);
    $('#editFacultyForm').attr('action', actionUrl);

    // Set the values in the modal form fields
    $('#edit_faculty_name').val(facultyName);
    $('#edit_specialization').val(specialization);
    $('#edit_designation').val(designation);
    $('#edit_course_id').val(courseId);
    $('#edit_year').val(year);

    // Show the modal
    $('#editFacultyModal').modal('show');
});
$('#editFacultyForm').submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status === 'success') {
                $('#editFacultyModal').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: 'Updated!',
                    text: 'Faculty updated successfully!',
                    confirmButtonText: 'OK'
                });

                var facultyRow = $('#faculty_' + response.faculty.id);
                facultyRow.find('.faculty-name').text(response.faculty.faculty_name);
                facultyRow.find('.faculty-specialization').text(response.faculty.specialization);
                facultyRow.find('.faculty-designation').text(response.faculty.designation);
                facultyRow.find('.faculty-year').text(response.faculty.year);
                facultyRow.find('.faculty-course').text(response.faculty.course.course_name);

               
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'There was an error updating the faculty.',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function(xhr, status, error) {
            if (xhr.status === 422) {
                var errors = xhr.responseJSON.errors;
                $('div.text-danger').remove(); // Remove any existing error messages

                for (var field in errors) {
                    var errorMessage = errors[field][0];
                    var fieldElement = $('#editFacultyModal input[name="' + field + '"], #editFacultyModal textarea[name="' + field + '"], #editFacultyModal select[name="' + field + '"]');
                    fieldElement.after('<div class="text-danger">' + errorMessage + '</div>');
                    fieldElement.addClass('is-invalid');
                }
            } else {
                alert('Something went wrong! Please try again.');
            }
        }
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
                        url: '{{ route('faculty.destroy', '') }}/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Faculty has been deleted.',
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