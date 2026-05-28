<?php $__env->startSection("naslov"); ?>
    Shop
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

    <div class="container mt-5">

        <h1 class="text-primary text-center mb-5">🛒 Shop</h1>

        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 border-0">

                        <div class="card-body d-flex flex-column">

                            <h3 class="card-title text-dark">
                                <?php echo e($product->name); ?>

                            </h3>

                            <p class="card-text text-muted">
                                <?php echo e($product->description); ?>

                            </p>

                            <div class="mt-auto">
                                <p class="mb-1">
                                    <strong>Cijena:</strong>
                                    <?php echo e($product->price); ?> KM
                                </p>

                                <p class="mb-0">
                                    <strong>Količina:</strong>
                                    <?php echo e($product->amount); ?>

                                </p>
                                <div class="mt-3 d-flex gap-2">

                                    <a href="/admin/delete-product/<?php echo e($product->id); ?>" class="btn btn-danger">
                                        Obriši
                                    </a>

                                    <a href="/admin/edit-product" class="btn btn-success">
                                        Dodaj
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/allProducts.blade.php ENDPATH**/ ?>