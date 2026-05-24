<?php $__currentLoopData = $allContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allContact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($allContact->email); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/allContacts.blade.php ENDPATH**/ ?>