<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.dashboards'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col">
<?php

use Illuminate\Support\Facades\Auth;

$userName = Auth::user()->name;

?>
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Good Morning, <?php echo e($userName); ?></h4>
                        </div>
                        
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <?php
            use App\Models\Event;
            use App\Models\Faculty;
            use App\Models\Recruiter;
            use App\Models\PlacedStudent;
            use App\Models\NaacReport;
            use App\Models\Career;
            use App\Models\Enquiry;
            use App\Models\Contact;


            $Contact = Contact::count();

            $Career = Career::count();
            $Enquiry = Enquiry::count();

            $NaacReport = NaacReport::count();

            $totalrecruiter = Recruiter::count();
            $PlacedStudent = PlacedStudent::count();

            $totalEvents = Event::count();
            $totalfaculty = Faculty::count();

            ?>

            <div class="row">
            <div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Event</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($totalEvents); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('event.index')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-success-subtle rounded fs-3">
                        <i class="bx bx-dollar-circle text-success"></i>
                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Faculty</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($totalfaculty); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('faculty.create')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                    <i class="bx bx-user text-primary"></i> 
                                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->


<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total recruiter</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($totalrecruiter); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('recruiter.create')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                    <i class="bx bx-user text-warning"></i> 
                                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Placed Student</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($PlacedStudent); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('placedstudent.create')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-info-subtle rounded fs-3">
                        <!-- OR -->
                        <!-- <i class="bx bx-briefcase text-warning"></i> -->
                        <i class="bx bx-user-check text-info"></i>
                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->


               
            </div> <!-- end row-->








            <div class="row">






            <div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Naac report</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($NaacReport); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('naac-reports.create')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                        <!-- OR -->
                        <!-- <i class="bx bx-briefcase text-warning"></i> -->
                        <i class="bx bx-file text-warning"></i>
                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->


<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Career Application</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($Career); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('careers.index')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-danger-subtle rounded fs-3">
                        <!-- OR -->
                        <!-- <i class="bx bx-briefcase text-warning"></i> -->
                        <i class="bx bx-briefcase text-danger"></i>
                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->



<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Enquiry</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($Enquiry); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('enquiries.index')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-info-subtle rounded fs-3">
                        <i class="bx bx-message-square-detail text-info"></i>
                        <!-- OR -->
                        <!-- <i class="bx bx-phone-call text-danger"></i> -->
                        <!-- <i class="bx bx-envelope text-danger"></i> -->
                        <!-- <i class="bx bx-help-circle text-danger"></i> -->
                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->


<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-animate">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 overflow-hidden">
                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Contact request</p>
                </div>
                <div class="flex-shrink-0">
                    <h5 class="text-success fs-14 mb-0">
                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> <?php echo e($Contact); ?>

                    </h5>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-between mt-4">
                <div>
                    <a href="<?php echo e(route('contacts.index')); ?>" class="text-decoration-underline">View </a>
                </div>
                <div class="avatar-sm flex-shrink-0">
                    <span class="avatar-title bg-info-subtle rounded fs-3">
                    <i class="bx bx-help-circle text-warning"></i>

                        <!-- OR -->
                        <!-- <i class="bx bx-phone-call text-danger"></i> -->
                        <!-- <i class="bx bx-envelope text-danger"></i> -->
                        <!-- <i class="bx bx-help-circle text-danger"></i> -->
                    </span>
                </div>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->









            </div>

          

        </div> <!-- end .h-100-->

    </div> <!-- end col -->

                    
                    

                  

                </div>
            </div> <!-- end card-->
        </div> <!-- end .rightbar-->

    </div> <!-- end col -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/maps/world-merc.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/swiper/swiper-bundle.min.js')); ?>"></script>
    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('build/js/pages/dashboard-ecommerce.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/index.blade.php ENDPATH**/ ?>