

<?php $__env->startSection('content'); ?>

    <div class="container">

        <?php $__currentLoopData = $Cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="rowcart d-flex">
                <div class="cartimg">
                    <img src="<?php echo e($c -> cartpro -> photo); ?>">
                </div>
                <p> <?php echo e($c -> cartpro -> name); ?> </p>
                <p> <?php echo e($c -> cartpro -> country); ?> </p>
                <p> <?php echo e($c -> cartpro -> price); ?> </p>
                <p> <?php echo e($c -> cartpro -> quantity); ?> </p>
                <button value="<?php echo e($c -> cartpro -> id); ?>">x</button>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/mkcmrzzh/tfdzjne-m1/resources/views/cart.blade.php ENDPATH**/ ?>