<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Sent Invoices</h3>
                        <p class="card-description">
                            All previously sent invoices <code>!!!</code>
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
                                        <th>Client Name</th>
                                        <th>Client Number</th>
                                        <th>Client email</th>
                                        <th>Sent Invoice</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $sentInvoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $si): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo $si->client_name; ?> </td>
                                            <td><?php echo $si->client_number; ?></td>
                                            <td><label class="badge badge-info"><?php echo $si->client_email; ?></label></td>
                                            <td><a href="storage/<?php echo e($si->client_invoicepath); ?>"><button class="btn btn-success btn-sm">Invoice (click to view invoice)</button></a></td>
                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <td>Any sent invoice</td>
                                    <?php endif; ?> 
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <?php echo e($sentInvoices->links()); ?>

                </div>
            </div>
        </div>
    </div>    

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>