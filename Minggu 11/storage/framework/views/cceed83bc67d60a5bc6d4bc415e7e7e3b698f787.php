<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">

		<title><?php echo e(config('app.name')); ?></title>
	</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  			<div class="container">
    		<?php echo $__env->yieldContent('content'); ?>
  		</div>
		</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\WahyuLaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>