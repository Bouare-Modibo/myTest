<h3>EITSEC Ghana Invoice</h3>

<div>
    Hello <?php echo e($nameclient); ?>, <br/>
    We are contacting in regard to new invoice that has been
    asigned to you. The invoice is attached to this email.
    <br/><br/>
    Thank you, 
    
    <a href="<?php echo e($message->embed('storage/$invoice')); ?>">Your invoice (click on this link)</a> 
</div>