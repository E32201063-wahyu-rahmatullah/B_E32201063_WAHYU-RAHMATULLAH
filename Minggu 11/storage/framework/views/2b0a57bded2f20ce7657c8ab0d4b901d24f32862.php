

<?php $__env->startSection('content'); ?>
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="<?php echo e(url('dashboard')); ?>">Home</a></li>
					<li><i class="icon_document_alt"></i>Riwayat Hidup</li>
					<li><i class="fa fa-files-o"></i>Pendidikan</li>
				</ol>
			</div>
		</div>
		<!-- form validation -->
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<?php echo e(isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan'); ?> Pendidikan
					</header>
					<?php if($errors->any()): ?>
					<div class="alert alert-danger">
						<strong> uHHHH! </strong> There's something wrong with you :).<br></br>
						<ul>
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($error); ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<?php endif; ?>
					<div class="panel-body">
						<div class="from">
							<form class="form-validate form-horizontal" id="pendidikan_form" method="POST" 
							action="<?php echo e(isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) : route('pendidikan.store')); ?>">
							<?php echo csrf_field(); ?>

                            <?php echo isset($pendidikan) ? method_field('PUT') : ''; ?>

							<div class="form-group">
								<label for="cname" class="control-label col-lg-12">Nama Sekolah <span 
									class="required">*</span></label>
									<div class="col-lg-10">
										<input  class="form-control" id="nama" minlength="5" type="text" name="nama" value="<?php echo e(isset($pendidikan) ? $pendidikan->nama : ''); ?>" 
										required />
									</div>
							</div>
								<div class="form-group">
									<label for="cemail" class="control-label col-lg-2">Tingkatan <span 
										class="required">*</span></label>
										<div class="col-lg-10">
											<select class="form-control m-bot15" name="tingkatan" id="tingkatan" required>
												<option value="1" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 1) ? 'selected' : ''); ?>>TK</option>
												<option value="2" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 2) ? 'selected' : ''); ?>>SD</option>
												<option value="3" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 3) ? 'selected' : ''); ?>>SMP</option>
												<option value="4" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 4) ? 'selected' : ''); ?>>SMA/SMK</option>
												<option value="5" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 5) ? 'selected' : ''); ?>>D3</option>
												<option value="6" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 6) ? 'selected' : ''); ?>>D4/S1</option>
												<option value="7" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 7) ? 'selected' : ''); ?>>S2</option>
												<option value="8" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 8) ? 'selected' : ''); ?>>S3</option>
											</select>
										</div>
								</div>
									<div class="form-group">
										<label for="curl" class="control-label col-lg-2">Tahun Masuk <span 
											class="required">*</span></label>
											<div class="col-lg-10">
												<input id="tahun_masuk" class="form-control" type="text" name="tahun_masuk" value="<?php echo e(isset($pendidikan) ? $pendidikan->tahun_masuk : ''); ?>" 
												required>
											</div>
									</div>
									<div class="form-group">
										<label for="curl" class="control-label col-lg-2">Tahun Selesai <span 
											class="required">*</span></label>
											<div class="col-lg-10"></div>
											<input id="tahun_keluar"  type="text" name="tahun_keluar" class="form-control" value="<?php echo e(isset($pendidikan) ? $pendidikan->tahun_keluar : ''); ?>" 
											required>	
									</div>
								</div>
								<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary" type="submit">Save</button>
									<a href="<?php echo e(route('pendidikan.index')); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
								</div>
								</div>
							</form>
						</div>

					</div>
				</section>
			</div>
		</div>
	<!-- page end-->
</section>
	</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('content-css'); ?>
<link rel="stylesheet"  href="<?php echo e(asset('backend/css/bootstarp-datepicker.css')); ?>" >
<?php $__env->stopPush(); ?>
<?php $__env->startPush('content-js'); ?>
<script src="<?php echo e(asset ('backend/js/bootstarp-datepicker.js')); ?>"></script>
<script type="text/javascript">
	$('#tahun_masuk').datepicker({
		format: "yyy",
		viewMode: "years",
		minViewMode: "years"
	});$('#tahun_keluar').datepicker({
		format:"yyyy",
		viewMode: "years",
		minViewMode: "years"
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LATIHAN\resources\views/backend/Pendidikan/create.blade.php ENDPATH**/ ?>