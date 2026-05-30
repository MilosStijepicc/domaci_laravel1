<?php $__env->startSection("sadrzajStranice"); ?>

    <div class="container mt-5">

        <h2>Edit Product</h2>

        <form action="/products/update/<?php echo e($product->id); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <input type="text"
                   name="name"
                   class="form-control mb-3"
                   value="<?php echo e($product->name); ?>">

            <textarea name="description"
                      class="form-control mb-3"><?php echo e($product->description); ?></textarea>

            <input type="number"
                   name="amount"
                   class="form-control mb-3"
                   value="<?php echo e($product->amount); ?>">

            <input type="number"
                   step="0.01"
                   name="price"
                   class="form-control mb-3"
                   value="<?php echo e($product->price); ?>">

            <button class="btn btn-success">
                Save Changes
            </button>

        </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/edit-product.blade.php ENDPATH**/ ?>