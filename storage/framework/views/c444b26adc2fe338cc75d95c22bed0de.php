

<?php $__env->startSection('title', 'Activity Report'); ?>

<?php $__env->startSection('css'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!-- DataTables Responsive CSS -->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Activity  <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Activity <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-md-7">
        <!-- Table for Documents -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Activity </h5>
            </div>
            <div class="card-body">
                <div style="overflow-x: auto;">
                    <table id="documentTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sno = 1;
                            ?>
                            <!-- Dynamic Data Will Be Populated Here -->
                            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($activities->firstItem() + $index); ?></td>
                            <td><?php echo e($report->category->category_name ?? 'N/A'); ?></td> <!-- Assuming category has a title field -->
                                <td><?php echo e($report->title); ?></td>
                                <td>
    <?php if(!empty($report->image)): ?> 
    <a href="<?php echo e(asset($report->image)); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo e(asset($report->image)); ?>" alt="Document Image" width="100" height="100" style="border-radius: 5px; border: 1px solid #ddd;">
        </a>
    <?php else: ?>
        <span>No Image</span>
    <?php endif; ?>
</td>

                                <td>
                                <button class="btn btn-primary btn-sm editReport" 
    data-id="<?php echo e($report->id); ?>" 
    data-title="<?php echo e($report->title); ?>"  
    data-category-id="<?php echo e($report->category->id); ?>"  
    data-image="<?php echo e(asset($report->image)); ?>">Edit
</button>
                                    <button class="btn btn-danger btn-sm deleteReport" data-id="<?php echo e($report->id); ?>">Delete</button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">
            <?php echo e($activities->links('pagination::bootstrap-4')); ?>

        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <!-- Form for Adding Document -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add  Activity</h5>
            </div>
            <div class="card-body">
            <form id="ActivityReportForm" method="POST" action="<?php echo e(route('collegeactivities.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-control" id="category_id" name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                    <?php echo e($category->category_name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="mb-3">
        <label for="title" class="form-label">Report Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title')); ?>">
    </div>
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
    <div class="mb-3">
    <label for="image" class="form-label">Activity Image</label>
    <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewDocument(event)">
</div>
<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="text-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<!-- Preview Image -->
<img id="documentPreview" src="" alt="Image Preview" class="mt-2" style="display: none; max-width: 200px; height: auto; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">

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
                <h5 class="modal-title" id="editDocumentModalLabel">Edit Acitvity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDocumentForm" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="documentId" name="id">
                    
                    <div class="mb-3">
                        <label for="editCategory_id" class="form-label">Category</label>
                        <select class="form-control" id="editCategory_id" name="category_id">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                                    <?php echo e($category->category_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Report Title</label>
                        <input type="text" class="form-control" id="editTitle" name="title" value="<?php echo e(old('title')); ?>">
                    </div>
                    <span class="text-danger error-message" id="title_error"></span> <!-- Error Message -->

                   
                    <div class="mb-3">
    <label for="image" class="form-label">Upload Image</label>
    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
    <?php $__errorArgs = ['image'];
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

<!-- Image Preview -->
<div class="mb-3">
    <label for="imagePreview" class="form-label">Image Preview</label>
    <img id="imagePreview" src="" alt="Image Preview" style="width: 100px; height:80 display: none;">
</div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

<script>
    function previewDocument(event) {
        const preview = document.getElementById('documentPreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result; // Set image src
                preview.style.display = "block"; // Show preview
            }
            reader.readAsDataURL(file);
        } else {
            preview.style.display = "none"; // Hide preview if no file is selected
        }
    }
    function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('imagePreview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = "block"; // Show the preview
        };
        reader.readAsDataURL(input.files[0]);
    }
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
    var image = $(this).data('image');
    $('#imageId').val($(this).data('id'));
    $('#imagePreview').attr('src', image).show();

    // Show the modal
    $('#editDocumentModal').modal('show');
});


// Save Changes and Submit the Form via AJAX
$('#editDocumentForm').on('submit', function (e) {
    e.preventDefault();  // Prevent the default form submission
    var formData = new FormData(this);
    formData.append('_method', 'PUT'); // Add PUT method for update

    $.ajax({
        url: '<?php echo e(route('collegeactivities.update', '')); ?>/' + $('#documentId').val(),
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
                    text: 'Activity updated successfully!',
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
                        url: '<?php echo e(route('collegeactivities.destroy', '')); ?>/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                              
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    ' Activity  has been deleted.',
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/Activity/activity.blade.php ENDPATH**/ ?>