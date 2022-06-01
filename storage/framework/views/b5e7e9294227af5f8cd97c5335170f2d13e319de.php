<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Details</h4>
                  <ol>
                    <li><b>Full Name: <?php echo e($user->name); ?></b></li>
                    <li><b>Email: <?php echo e($user->email); ?></b></li>
                    <li><b>Role: <?php echo $user->is_admin == 1 ? 'Admin' : 'User'; ?></b></li>
                    <li><b>Status <?php echo e($user->status); ?></b></li>
                  </ol>
                </div>
                <div><h2><b><a href ="javascript: history.go(-1)">Go Back</a></b></h2></div><hr />
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>