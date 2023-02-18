

<?php $__env->startSection('content'); ?>

	<div class="containerSolo d-flex w-100">
		
		<div class="cards_solo">

				<img class="catimg_solo" src="<?php echo e($pro -> photo); ?>">

				<div class="cardsinfo">

					<p class="pros_name"><?php echo e($pro -> name); ?></p>

					<p class="pros_price"><?php echo e($pro -> price); ?> руб.</p>

					<button class="btn btn-success">Купить</button>

				</div>

		</div>

		<div class="character">

			<p class="pros">Характеристики товара:</p>

			<p class="pros">Страна: <?php echo e($pro -> country); ?></p>

			<p class="pros">Модель: <?php echo e($pro -> model); ?></p>

			<p class="pros">Год выпуска: <?php echo e($pro -> year); ?></p>

		</div>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/mkcmrzzh/tfdzjne-m1/resources/views/soloproduct.blade.php ENDPATH**/ ?>