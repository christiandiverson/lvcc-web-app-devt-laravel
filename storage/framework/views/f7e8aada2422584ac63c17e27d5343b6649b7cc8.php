<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
			
				<span>
					Status by 
					
					<small>
						<a href="/posts/<?php echo e($posts->id); ?>/edit"></a>
					</small>
				</span>

				<span class="pull-right" >
					<?php echo e($posts->created_at->diffForHumans()); ?>


				</span>
					
			</div>

			<div class="panel-body">
				<?php echo e($posts->status); ?>

			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>