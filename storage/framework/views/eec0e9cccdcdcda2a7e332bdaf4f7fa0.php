<?php $__env->startSection("sadrzajStranice"); ?>

<form action="/contacts/update/<?php echo e($contact->id); ?>" method="POST">
    <?php echo e(csrf_field()); ?>


    <input type="email"
           name="email"
           class="form-control mb-3"
           value="<?php echo e($contact->email); ?>">

    <input type="text"
           name="subject"
           class="form-control mb-3"
           value="<?php echo e($contact->subject); ?>">

    <textarea name="message"
              class="form-control mb-3"><?php echo e($contact->message); ?></textarea>

    <button class="btn btn-success">
        Save Changes
    </button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Korisnik\Desktop\domaci\resources\views/edit-contact.blade.php ENDPATH**/ ?>