

<?php $__env->startSection("naslov"); ?>
Shop
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

<div class="p-4 bg-light rounded shadow-sm">

    <h2 class="text-primary mb-4">Shop</h2>
    
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1>
                <?php echo e($product); ?>

                <?php if(str_contains(mb_strtolower($product), 'šnicla')): ?>
                    - akcija
                <?php endif; ?>
            </h1>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/shop.blade.php ENDPATH**/ ?>