

<?php $__env->startSection('title', 'Result Analysis'); ?>

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
<?php $__env->slot('li_1'); ?> Enquiry <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Enquiry Data <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-md-12">
        <!-- Table for Enquiries -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Enquiry Data</h5>
            </div>
            <div class="card-body">
                <div style="overflow-x: auto;">
                    <table id="enquiryTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                            <th>SNO</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Program</th>
                                <th>Course</th>
                                <th>Specialization</th>
                                <th>JEE Mains</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $Enquiry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($Enquiry->firstItem() + $index); ?></td>

                                    <td><?php echo e($enquiry->name); ?></td>
                                    <td><?php echo e($enquiry->email); ?></td>
                                    <td><?php echo e($enquiry->mobile_no); ?></td>
                                    <td><?php echo e($enquiry->state); ?></td>
                                    <td><?php echo e($enquiry->city); ?></td>
                                    <td><?php echo e($enquiry->program); ?></td>
                                    <td><?php echo e($enquiry->course); ?></td>
                                    <td><?php echo e($enquiry->specialization); ?></td>
                                    <td><?php echo e($enquiry->jee_mains); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <!-- Pagination Links -->
                    <div class="pagination-wrapper">
                        <?php echo e($Enquiry->links('pagination::bootstrap-4')); ?>

                    </div>
                </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/Enquiry/enquiry.blade.php ENDPATH**/ ?>