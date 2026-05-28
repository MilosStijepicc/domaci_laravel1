

<?php $__env->startSection("naslov"); ?>
    Početna
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

    <div class="container mt-5">

        <div class="p-4 bg-light rounded shadow-sm mb-5">

            <h1 class="text-primary">
                Dobrodošli
            </h1>

            <p>
                Trenutno vrijeme:
                <strong><?php echo e($trenutnoVrijeme); ?></strong>
            </p>

        </div>

        <h2 class="mb-4 text-center">
            Najnoviji proizvodi
        </h2>

        <div class="row">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4 mb-4">

                    <div class="card shadow h-100 border-0">

                        <div class="card-body d-flex flex-column">

                            <h3 class="card-title">
                                <?php echo e($product->name); ?>

                            </h3>

                            <p class="text-muted">
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

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

    <div class="container mb-5">

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h2 class="mb-4 text-center text-primary">
                    Kontakt forma
                </h2>

                <?php if($errors->any()): ?>

                    <div class="alert alert-danger">
                        Greška: <?php echo e($errors->first()); ?>

                    </div>

                <?php endif; ?>

                <form method="post" action="/send-contact">

                    <?php echo e(csrf_field()); ?>


                    <div class="mb-3">

                        <label class="form-label">
                            Email adresa
                        </label>

                        <input
                            name="email"
                            type="email"
                            class="form-control"
                            placeholder="Unesite vaš email"
                        >

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Naslov poruke
                        </label>

                        <input
                            name="subject"
                            type="text"
                            class="form-control"
                            placeholder="Unesite naslov poruke"
                        >

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Poruka
                        </label>

                        <textarea
                            name="description"
                            class="form-control"
                            rows="5"
                            placeholder="Unesite vašu poruku"
                        ></textarea>

                    </div>

                    <button class="btn btn-primary w-100">
                        Pošalji poruku
                    </button>

                </form>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/welcome.blade.php ENDPATH**/ ?>