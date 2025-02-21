  
<?php $__env->startSection('title', 'Video'); ?>

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
<?php $__env->slot('li_1'); ?> Video <?php $__env->endSlot(); ?>  
<?php $__env->slot('title'); ?> Video Data <?php $__env->endSlot(); ?>  
<?php echo $__env->renderComponent(); ?>  

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
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($videos->firstItem() + $index); ?></td>
                            <td>
                                <a href="<?php echo e($video->link); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo e($video->link); ?>

                                </a>
                            </td>
                            <td><?php echo e($video->year); ?></td>
                            <td>
                                <button class="btn btn-primary btn-sm editVideo" data-id="<?php echo e($video->id); ?>" data-link="<?php echo e($video->link); ?>" data-year="<?php echo e($video->year); ?>">Edit</button>
                                <button class="btn btn-danger btn-sm deleteVideo" data-id="<?php echo e($video->id); ?>">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="pagination-wrapper">
            <?php echo e($videos->links('pagination::bootstrap-4')); ?>

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
            <form id="videoForm" method="POST" action="<?php echo e(route('video.store')); ?>">  
    <?php echo csrf_field(); ?>  

    <div class="mb-3">  
        <label for="year" class="form-label">Select Year</label>  
        <select class="form-control" id="year" name="year" >  
            <?php for($i = 2020; $i <=2025; $i++): ?>  
                <option value="<?php echo e($i); ?>-<?php echo e($i + 1); ?>"><?php echo e($i); ?>-<?php echo e($i + 1); ?></option>  
            <?php endfor; ?>  
        </select>  
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

    <div class="mb-3">  
        <label for="link" class="form-label">YouTube Link</label>  
        <input type="text" class="form-control" id="link" name="link" placeholder="Enter YouTube link" >  
        <?php $__errorArgs = ['link'];
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
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="videoId">
                    <div class="mb-3">
                        <label for="editLink" class="form-label">Video Link</label>
                        <input type="text" class="form-control" id="editLink" name="link" >
                        <span class="text-danger" id="linkError"></span>

                    </div>
                    <div class="mb-3">
                        <label for="editYear" class="form-label">Year</label>
                        <select class="form-control" id="editYear" name="year" required>
                            <?php for($i = 2020; $i <= 2025; $i++): ?>  
                                <option value="<?php echo e($i); ?>-<?php echo e($i + 1); ?>"><?php echo e($i); ?>-<?php echo e($i + 1); ?></option>
                            <?php endfor; ?>
                        </select>
                        <span class="text-danger" id="yearError"></span>

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
                        url: '<?php echo e(route('video.destroy', '')); ?>/' + id,
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
<?php $__env->stopSection(); ?>  

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/media/video.blade.php ENDPATH**/ ?>