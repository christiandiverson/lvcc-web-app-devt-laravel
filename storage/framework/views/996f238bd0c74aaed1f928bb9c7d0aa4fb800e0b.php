<?php $__env->startSection('content'); ?>
<div class="row">
	<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	
		<div class="col-md-4 col-md-offset-4">
		  <div class="panel panel-default">
			 <div class="panel-heading">
				<span> Status by id number <?php echo e($post->user_id); ?> </span>

				<span class="pull-right" >
					<?php echo e($post->created_at->diffForHumans()); ?>

				</span>

			 </div>
			 
			 <div class="panel-body">
			 <?php echo e($post->Shortstatus); ?>


			 <a href="/posts/<?php echo e($post->id); ?>"> Read more </a>
			 </div>

			 <div class="panel-footer clearfix" style="background-color: white ">
			 <?php if($post->user_id==Auth::id()): ?>
			 		<form class="pull-right" style="margin-left:25px" action="/posts/<?php echo e($post->id); ?>" method="POST">
			 		<?php echo e(csrf_field()); ?>

			 		<?php echo e(method_field('DELETE')); ?>

			 		<button class="btn btn-danger btn-sm" >Delete</button>
			 			
			 		</form>
			 <?php endif; ?>
			 <i class="fa fa-heart " ></i>
			 	
			 </div>			
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		No Status
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>