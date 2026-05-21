

<?php $__env->startSection("naslov"); ?>
Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sadrzajStranice"); ?>

<div class="row">

    
    <div class="col-md-6">

        <h2 class="mb-3 text-primary">Kontaktiraj nas</h2>

        <form>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Unesite email">
            </div>

            <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="Tema poruke">
            </div>

            <div class="mb-3">
                <label class="form-label">Poruka</label>
                <textarea class="form-control" rows="5" placeholder="Unesite poruku"></textarea>
            </div>

            <button class="btn btn-primary">Pošalji</button>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/contact.blade.php ENDPATH**/ ?>