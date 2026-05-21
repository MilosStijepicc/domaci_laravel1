
<?php $__env->startSection("naslov"); ?>
Welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection("sadrzajStranice"); ?>
<div class="alert alert-info">
    <p>Trenutno vrijeme je <?php echo e(date("h:i:s")); ?></p>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/welcome.blade.php ENDPATH**/ ?>