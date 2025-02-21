

<?php $__env->startSection('title', 'Faculty Management'); ?>

<?php $__env->startSection('css'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Faculty <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Faculty Data <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

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
                            <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="faculty_<?php echo e($faculty->id); ?>">
    <td><?php echo e($faculties->firstItem() + $index); ?></td>
    <td class="faculty-name"><?php echo e($faculty->faculty_name); ?></td>
    <td class="faculty-specialization"><?php echo e($faculty->specialization); ?></td>
    <td class="faculty-designation"><?php echo e($faculty->designation); ?></td>
    <td class="faculty-year"><?php echo e($faculty->year); ?></td>
    <td class="faculty-course"><?php echo e($faculty->course->course_name); ?></td>
    <td>
        <button class="btn btn-primary btn-sm editfaculty" 
                data-id="<?php echo e($faculty->id); ?>" 
                data-faculty-name="<?php echo e($faculty->faculty_name); ?>" 
                data-specialization="<?php echo e($faculty->specialization); ?>" 
                data-designation="<?php echo e($faculty->designation); ?>" 
                data-course-id="<?php echo e($faculty->course_id); ?>" 
                data-year="<?php echo e($faculty->year); ?>">
            Edit
        </button>
        <button class="btn btn-danger btn-sm deleteImage mt-2" data-id="<?php echo e($faculty->id); ?>">
            Delete
        </button>
    </td>
</tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">
                    <?php echo e($faculties->links('pagination::bootstrap-4')); ?>

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
                <form action="<?php echo e(route('faculty.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <!-- Faculty Name -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="faculty_name">Faculty Name</label>
                <input type="text" class="form-control" name="faculty_name" id="faculty_name" value="<?php echo e(old('faculty_name')); ?>" >
                <?php $__errorArgs = ['faculty_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <!-- Specialization -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" name="specialization" id="specialization" value="<?php echo e(old('specialization')); ?>" >
                <?php $__errorArgs = ['specialization'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <!-- Designation -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" value="<?php echo e(old('designation')); ?>" >
                <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <!-- Course -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="course_id">Course</label>
                <select class="form-control" name="course_id" id="course_id" >
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($course->id); ?>" <?php echo e(old('course_id') == $course->id ? 'selected' : ''); ?>><?php echo e($course->course_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['course_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <!-- Year -->
        <div class="col-md-6">
            <div class="form-group">
                           <div class="mb-3">
    <label for="year" class="form-label">Academic Year</label>
    <input type="text" class="form-control" name="year" id="year" 
        value="<?php echo e(old('year', now()->year . '-' . (now()->year + 1))); ?>" >
</div>


                <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="faculty_name">PDF Title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo e(old('title')); ?>" >
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="upload_pdf">Upload PDF</label>
                <input type="file" class="form-control" name="upload_pdf" id="upload_pdf" accept="application/pdf">
                <?php $__errorArgs = ['upload_pdf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
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
                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($course->id); ?>"><?php echo e($course->course_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3">
    <label for="year" class="form-label">Academic Year</label>
    <input type="text" class="form-control" name="year" id="year" 
        value="<?php echo e(old('year', now()->year . '-' . (now()->year + 1))); ?>" >
</div>

                   
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
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
    var actionUrl = '<?php echo e(route("faculty.update", ":id")); ?>'.replace(':id', facultyId);
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
                        url: '<?php echo e(route('faculty.destroy', '')); ?>/' + id,
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/Academic/faculty/create.blade.php ENDPATH**/ ?>