

<?php $__env->startSection('content'); ?>

	<h1>Каталог</h1>

	<div class="upmenu d-flex">

		<form action="/public/filter" class="filter col-6">
			<select name="category_filter" class="category_filter">
				<?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				<option value="<?php echo e($cat -> id); ?>"><?php echo e($cat -> name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			<select name="select_filter" class="select_filter">
				<option value="price">По цене</option>
				<option value="year">По году производства</option>
				<option value="name">По наименованию</option>
			</select>
			<button type="submit" class="btn btn-success">Подтвердить</button>
		</form>

		<div class="basket col-6 d-flex">
			<a href="/public/cart">
				<p>Корзина</p>
			</a>
		</div>

	</div>

	<div class="containerCat w-100">	

		<?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<div class="bordercard">

			<div class="imgsize">

			<div class="imginner d-flex">

				<a href="/public/soloproduct/<?php echo e($pro -> id); ?>">

					<img class="catimg img-fluid" src="<?php echo e($pro -> photo); ?>">

				</a>

			</div>

			</div>

			<div class="carddown">

				<p><?php echo e($pro -> name); ?></p>

				<p><?php echo e($pro -> price); ?> руб.</p>

			<button class="btn btn-success" value="<?php echo e($pro -> id); ?>"><a href="/public/cart">В корзину</a></button>

			</div>

		</div>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/mkcmrzzh/tfdzjne-m1/resources/views/catalog.blade.php ENDPATH**/ ?>