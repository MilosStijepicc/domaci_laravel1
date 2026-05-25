<?php $__env->startSection("naslov"); ?>
    Svi proizvodi
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h1 class="text-primary mb-4">
                Svi proizvodi
            </h1>

            <?php if(session('success')): ?>

                <div class="alert alert-success">

                    <?php echo e(session('success')); ?>


                </div>

            <?php endif; ?>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                <tr>

                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Opis</th>
                    <th>Količina</th>
                    <th>Cijena</th>

                </tr>

                </thead>

                <tbody>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>

                        <td><?php echo e($product->id); ?></td>

                        <td><?php echo e($product->name); ?></td>

                        <td><?php echo e($product->description); ?></td>

                        <td><?php echo e($product->amount); ?></td>

                        <td><?php echo e($product->price); ?> KM</td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/products.blade.php ENDPATH**/ ?>