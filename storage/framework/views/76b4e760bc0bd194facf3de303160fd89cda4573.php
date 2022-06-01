<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Users</h3>
                        <p class="card-description">
                            User management <code>here you can edit and delete user</code>
                        </p>
                        <?php if(Session::has('message')): ?>
                            <div class="alert alert-success">
                                <?php echo e(Session::get('message')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><a href="<?php echo e(route('singleuser', $u->id)); ?>"><?php echo $u->name; ?> </a></td>
                                            <td><a href="<?php echo e(route('singleuser', $u->id)); ?>"><?php echo $u->email; ?></a></td>
                                            <td><label class="badge badge-info"><?php echo $u->is_admin == 1 ? 'Admin' : 'User'; ?></label></td>
                                            <td><?php echo $u->status; ?></td>
                                            <td><a href="<?php echo e(route('edit', $u->id)); ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
                                            <td>
                                                <form action="<?php echo e(route('deleteuser', $u->id)); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                        <button  class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <td>Any User in the DataBase</td>
                                    <?php endif; ?> 
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <?php echo e($users->links()); ?>

                </div>
            </div>
        </div>
    </div>    

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>