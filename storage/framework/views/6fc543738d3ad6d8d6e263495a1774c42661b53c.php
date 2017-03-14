</style>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="profile.img" src="<?php echo e(URL::asset ('image/765698.png')); ?>"height="100" width="150">
				<h1><?php echo e($user->name); ?></h1>
				<h5><?php echo e($user->email); ?></h5>
				<h4> <?php echo e($user->dob); ?> ( <?php echo e(Carbon\Carbon::createFromFormat ('Y-m-d',$user->dob)->age); ?> years old)</h4>
				<button class="btn btn-success">Sundan
				</button>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>