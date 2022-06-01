<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new user</h4>
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('message')); ?>

                        </div>
                    <?php endif; ?>

                  <form action="<?php echo e(route('adduser')); ?>" method="post"  class="forms-sample">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" placeholder="Full Name" >
                        
                        <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email">
                        
                        <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="is_admin" class="form-control">
                            <option value="">Select</option>
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                        <?php if($errors->has('is_admin')): ?>
                            <span class="text-danger"><?php echo e($errors->first('is_admin')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" name="status" value="<?php echo e(old('status')); ?>" class="form-control" placeholder="User's status">
                        <?php if($errors->has('status')): ?>
                            <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" >
                        <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    </div>    

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>