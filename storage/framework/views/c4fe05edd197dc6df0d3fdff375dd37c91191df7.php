<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form to send invoice </h4>
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('message')); ?>

                        </div>
                    <?php endif; ?>

                  <form action="<?php echo e(route('send_invoice')); ?>" method="post"  class="forms-sample" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Name Of Client</label>
                        <input type="text" name="nameclient" value="<?php echo e(old('nameclient')); ?>" class="form-control" placeholder="Client's name" >
                        
                        <?php if($errors->has('nameclient')): ?>
                            <span class="text-danger"><?php echo e($errors->first('nameclient')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Contact</label>
                        <input type="number" name="contactclient" value="<?php echo e(old('contactclient')); ?>" class="form-control" placeholder="Number">
                        
                        <?php if($errors->has('contactclient')): ?>
                            <span class="text-danger"><?php echo e($errors->first('contactclient')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="emailclient" value="<?php echo e(old('emailclient')); ?>" class="form-control" placeholder="Client's email">
                        <?php if($errors->has('emailclient')): ?>
                            <span class="text-danger"><?php echo e($errors->first('emailclient')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                      <label>Upload Invoice</label>
                      <input type="file" name="invoice"  class="form-control" >
                        <?php if($errors->has('invoice')): ?>
                            <span class="text-danger"><?php echo e($errors->first('invoice')); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Send</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    </div>    

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>