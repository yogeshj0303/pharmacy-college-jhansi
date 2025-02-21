
<?php $__env->startSection('title', 'Notice Board'); ?>


<?php $__env->startSection('css'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title><?php echo $__env->yieldContent('title'); ?> | Pharmacy College Management</title>

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Notice Board <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Notice <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <!-- Notices Table -->
    <div class="col-12 col-md-7">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Notices</h4>
            </div>
            <div class="card-body">
            <div style="overflow-x: auto;">

                <table class="table table-bordered table-striped" id="noticeTable">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($notices->firstItem() + $index); ?></td>
                        <td><?php echo e($notice->category); ?></td>
                            <td><?php echo e($notice->title); ?></td>
                            <td>
                                <?php if($notice->upload_pdf): ?>
                                <a href="<?php echo e(asset(''.$notice->upload_pdf)); ?>" target="_blank" class="">View Document</a>
                                <?php else: ?>
                                N/A
                                <?php endif; ?>
                            </td>
                            <td>
    <div class="d-flex gap-2">
        <button class="btn btn-primary btn-sm editNotice" 
                data-id="<?php echo e($notice->id); ?>" 
                data-category="<?php echo e($notice->category); ?>" 
                data-title="<?php echo e($notice->title); ?>"  
                data-pdf="<?php echo e(asset($notice->upload_pdf)); ?>">
            Edit
        </button>
        
        <button class="btn btn-danger btn-sm deleteVideo" data-id="<?php echo e($notice->id); ?>">
            Delete
        </button>
    </div>
</td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="pagination-wrapper">
            <?php echo e($notices->links('pagination::bootstrap-4')); ?>

        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Notice Form -->
    <div class="col-12 col-md-5">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Add Notice</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('notices.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Select Category</option>
                            <option value="News & Event" <?php echo e(old('category') == 'News & Event' ? 'selected' : ''); ?>>News & Event</option>
                            <option value="Notice & Announcement" <?php echo e(old('category') == 'Notice & Announcement' ? 'selected' : ''); ?>>Notice & Announcement</option>
                        </select>
                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title')); ?>">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="upload_pdf" class="form-label">Upload PDF</label>
                        <input type="file" name="upload_pdf" id="upload_pdf" class="form-control">
                        <?php $__errorArgs = ['upload_pdf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Notice</button>
                </form>
            </div>
        </div>
    </div>
</div>










<div class="modal fade" id="editNoticeModal" tabindex="-1" aria-labelledby="editNoticeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="editNoticeForm" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Spoofing the PUT method -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNoticeModalLabel">Edit Notice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_notice_id" name="id">
                    <div class="mb-3">
    <label for="edit_category" class="form-label">Category</label>
    <select class="form-control" id="edit_category" name="category" required>
        <option value="">Select Category</option>
        <option value="News & Event">News & Event</option>
        <option value="Notice & Announcement">Notice & Announcement</option>
    </select>
</div>

                    <div class="mb-3">
                        <label for="edit_title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edit_title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_pdf" class="form-label">PDF File</label>
                        <input type="file" class="form-control" id="edit_pdf" name="upload_pdf">
                    </div>
                    <div id="current_pdf"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(URL::asset('build/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

<script>
   $(document).ready(function() {
    // Initialize DataTable

    // Edit button click
    $('.editNotice').click(function() {
        var id = $(this).data('id');
        var category = $(this).data('category');
        var title = $(this).data('title');
        var pdf = $(this).data('pdf');

        // Populate modal fields with current data
        $('#edit_notice_id').val(id);
    
    $('#edit_category').val(category);
            $('#edit_title').val(title);
        
        // Show current PDF link if exists
        if (pdf) {
            $('#current_pdf').html(`<a href="${pdf}" target="_blank">View Current PDF</a>`);
        } else {
            $('#current_pdf').html('No file uploaded');
        }

        // Show modal
        $('#editNoticeModal').modal('show');
    });

    // Handle form submission for updating notice
    $('#editNoticeForm').on('submit', function(e) {
        e.preventDefault();

        // Create FormData from the form
        var formData = new FormData(this);
        var noticeId = $('#edit_notice_id').val();

        // Send AJAX request to update notice
        $.ajax({
            url: `/notices/${noticeId}`,
            type: 'POST',  // Using POST but with method spoofing
            data: formData,
            processData: false,  // Don't process the data
            contentType: false,  // Don't set content type as jQuery will do it for FormData
            success: function(response) {
                Swal.fire("Updated!", "Notice updated successfully.", "success");
                $('#editNoticeModal').modal('hide');
                location.reload(); 
            },
            error: function(response) {
                Swal.fire("Error!", "Something went wrong.", "error");
            }
        });
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
                        url: '<?php echo e(route('notices.destroy', '')); ?>/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your notice has been deleted.',
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/NoticeBoard/create.blade.php ENDPATH**/ ?>