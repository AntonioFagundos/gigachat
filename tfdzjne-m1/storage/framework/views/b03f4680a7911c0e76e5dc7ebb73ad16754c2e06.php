

<?php $__env->startSection('content'); ?>

	<h1>О нас</h1>

	<div class="container d-flex">
		
		<div class="logocomp col-7"><img src="/public/img/logotype.jpg"></div>

		<div class="deviz col-5">
			<p>Наш девиз очень простой, сделал хорошо - иди домой. В случае проблемы в нашей продукции, товар возвращению не подлежит, извините за предоставленные неудобства.</p>
		</div>

	</div>

	<h1>Новинки</h1>

	<div class="container">
		
		<div class="slider d-flex justify-content-center align-items-center">
			
			<div class="next"><img src="/public/img/next.png"></div>
			<div class="photo"><img src="/public/img/pro1.jpg"></div>
			<div class="prew"><img src="/public/img/prew.png"></div>

		</div>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/mkcmrzzh/tfdzjne-m1/resources/views/weare.blade.php ENDPATH**/ ?>