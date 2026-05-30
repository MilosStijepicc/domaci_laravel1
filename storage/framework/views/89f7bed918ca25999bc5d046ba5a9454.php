<?php $__env->startSection("naslov"); ?>
    Svi kontakti
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

    <div class="container mt-5">

        <h1 class="text-center text-primary mb-5">
            📩 Poslati kontakti
        </h1>

        <div class="row">

            <?php $__currentLoopData = $allContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allContact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-6 mb-4">

                    <div class="card shadow border-0 h-100">

                        <div class="card-body d-flex flex-column">

                            <h5 class="text-primary mb-3">
                                <?php echo e($allContact->subject); ?>

                            </h5>

                            <p class="mb-2">
                                <strong>Email:</strong>
                                <?php echo e($allContact->email); ?>

                            </p>

                            <p class="mb-3">
                                <strong>Poruka:</strong><br>
                                <?php echo e($allContact->message); ?>

                            </p>

                            <div class="mt-auto d-flex gap-2">

                                <a href="/contacts/edit/<?php echo e($allContact->id); ?>" class="btn btn-warning">
                                    Edit
                                </a>

                                <a href="/admin/delete-contact/<?php echo e($allContact->id); ?>" class="btn btn-danger">
                                    🗑️ Obriši
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/allContacts.blade.php ENDPATH**/ ?>