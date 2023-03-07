

<?php $__env->startSection('content'); ?>

    <div class="container">

        <h1>Корзина</h1>

        <div class="knopka">

        <button class="btn btn-success"><a href="/public/catalog">Назад</a></button>

        </div>

        <?php $__currentLoopData = $Cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="cart-t">

                <div class="cartimg">
                    <img class="img-fluid" src="<?php echo e($c -> cartpro -> photo); ?>">
                </div>
                
                <p><?php echo e($c -> cartpro -> name); ?></p>
                <p>Цена: <?php echo e($c -> cartpro ->price * $c->quantity); ?> Р</p>
                <div class="m-p">
                    <a class="minus" href="/public/cart/minus/<?php echo e($c -> id); ?>">-</a>
                    <p><?php echo e($c -> quantity); ?></p>
                    <a class="plus" href="/public/cart/plus/<?php echo e($c -> id); ?>">+</a>
                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/mkcmrzzh/tfdzjne-m1/resources/views/cart.blade.php ENDPATH**/ ?>