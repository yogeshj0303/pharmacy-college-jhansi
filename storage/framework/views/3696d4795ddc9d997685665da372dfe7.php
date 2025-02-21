

<?php $__env->startSection('title', 'Faculty'); ?>

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
<?php $__env->slot('li_1'); ?> Faculty <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Faculty Data <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-md-7">
        <!-- Table for Documents -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Faculty</h5>
            </div>
            <div class="card-body">
            <div style="overflow-x: auto;">

                <table id="documentTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Title</th>
                            <th>Document</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        ?>
                        <!-- Dynamic Data Will Be Populated Here -->
                        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>  $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($documents->firstItem() + $index); ?></td>
                            <td><?php echo e($document->title); ?></td>
                            <td>
                                <a href="<?php echo e(asset(''.$document->upload_pdf)); ?>" target="_blank" rel="noopener noreferrer">
                                    View Document
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm editDocument" data-id="<?php echo e($document->id); ?>" data-title="<?php echo e($document->title); ?>" data-document="<?php echo e(asset($document->upload_pdf)); ?>">Edit</button>
                                <button class="btn btn-danger btn-sm deleteDocument" data-id="<?php echo e($document->id); ?>">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <div class="pagination-wrapper">
            <?php echo e($documents->links('pagination::bootstrap-4')); ?>

        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <!-- Form for Adding Document -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Faculty pdf</h5>
            </div>
            <div class="card-body">
                <form id="documentForm" method="POST" action="<?php echo e(route('faculty-documents.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
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
    <label for="document" class="form-label">Upload Document</label>
    <input type="file" class="form-control" id="document" name="upload_pdf"  accept=".pdf" onchange="previewDocument(event)">
</div>
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
                <h5 class="modal-title" id="editDocumentModalLabel">Edit Faculty pdf </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDocumentForm">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="documentId">
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Faculty Title</label>
                        <input type="text" class="form-control" id="editTitle" name="title" >
                        <div class="invalid-feedback" id="editTitleError"></div>
                    </div>
                    <div class="mb-3">
                        <label for="editDocument" class="form-label">Faculty document</label>
                        <input type="file" class="form-control" id="editDocument" name="upload_pdf" accept=".pdf">
                        <div class="invalid-feedback" id="editDocumentError"></div>  
                        <a id="editDocumentPreview" href="" target="_blank" ></a>

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
        preview.style.display = "block"; // Show the preview
        preview.textContent = event.target.files[0].name; // Display file name
    }

    function previewDocumentEdit(event) {
        const preview = document.getElementById('editDocumentPreview');
        preview.style.display = "block"; // Show the preview
        preview.textContent = event.target.files[0].name; // Display file name
    }

    $(document).ready(function () {
        // Initialize DataTable

        // Edit Document
        $(document).on('click', '.editDocument', function () {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var document = $(this).data('document');
            $('#documentId').val(id);
            $('#editTitle').val(title);
            if (document) {
                $('#editDocumentPreview').text('View Document')
            .attr('href', document)       // Set the href attribute to the document URL
            .attr('target', '_blank')      // Open the link in a new tab
            .show();  
            
            $('#editDocumentPreviewContainer').show();  // Show the document preview section
    } else {
        $('#editDocumentPreviewContainer').hide();  // Hide the document preview section if no document is available
    }
            $('#editDocumentModal').modal('show');
        });

        // Save Changes
        $('#editDocumentForm').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_method', 'PUT');
            $.ajax({
                url: '<?php echo e(route('faculty-documents.update', '')); ?>/' + $('#documentId').val(),
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
                            text: 'Document updated successfully!',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            // Reload the page after the user clicks 'OK'
                            location.reload();
                        });
                    }
                },
                error: function (error) {
            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');

            if (error.responseJSON.errors) {
                // Loop through the errors and display them under the corresponding fields
                if (error.responseJSON.errors.title) {
                    $('#editTitle').addClass('is-invalid');
                    $('#editTitleError').text(error.responseJSON.errors.title[0]);
                }
                if (error.responseJSON.errors.upload_pdf) {
                    $('#editDocument').addClass('is-invalid');
                    $('#editDocumentError').text(error.responseJSON.errors.upload_pdf[0]);
                }
            }
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
                        url: '<?php echo e(route('faculty-documents.destroy', '')); ?>/' + id,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Document  has been deleted.',
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/Academic/faculty/upload_pdf.blade.php ENDPATH**/ ?>