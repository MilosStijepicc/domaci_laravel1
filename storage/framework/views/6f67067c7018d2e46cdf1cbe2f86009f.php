<?php $__env->startSection("naslov"); ?>
    Dodaj proizvod
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h1 class="text-primary mb-4">
                Dodavanje proizvoda
            </h1>

            <?php if($errors->any()): ?>

                <div class="alert alert-danger">

                    <ul>

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li><?php echo e($error); ?></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>

            <?php endif; ?>

            <form action="/admin/save-product" method="POST">

                <?php echo csrf_field(); ?>

                <div class="mb-3">

                    <label>Naziv proizvoda</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?php echo e(old('name')); ?>"
                    >

                </div>

                <div class="mb-3">

                    <label>Opis proizvoda</label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="4"
                    ><?php echo e(old('description')); ?></textarea>

                </div>

                <div class="mb-3">

                    <label>Količina</label>

                    <input
                        type="number"
                        name="amount"
                        class="form-control"
                        value="<?php echo e(old('amount')); ?>"
                    >

                </div>

                <div class="mb-4">

                    <label>Cijena</label>

                    <input
                        type="number"
                        step="0.01"
                        name="price"
                        class="form-control"
                        value="<?php echo e(old('price')); ?>"
                    >

                </div>

                <button class="btn btn-primary">

                    Dodaj proizvod

                </button>

            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/add-product.blade.php ENDPATH**/ ?>