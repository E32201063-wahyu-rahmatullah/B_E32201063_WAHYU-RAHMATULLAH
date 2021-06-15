<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">

		<title><?php echo e(config('app.name')); ?></title>
	</head>
<body>


<?php $__env->startSection('content'); ?>
	<div class="jumbotron jumbotron-fluid">
  			<div class="container">
    		<h1 class="display-4">Halaman Home</h1>
    		<p class="lead">Halaman ini merupakan halaman Home.</p>
  		</div>
  		<p>Nama : <?php echo e($nama); ?></p>
  		<p>Mata Pelajaran</p>
  		<ul>
  			<?php $__currentLoopData = $pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  			<li><?php echo e($p); ?></li>
  			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WahyuLaravel\resources\views/home.blade.php ENDPATH**/ ?>