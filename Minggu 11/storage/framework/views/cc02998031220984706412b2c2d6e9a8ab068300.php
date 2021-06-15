

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
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Pendidikan
					</header>
					<div class="panel-body">
						<?php if($message = Session::get('success')): ?>
						<div class="alert alert-success">
							<p><?php echo e($message); ?></p>							
						</div>
						<?php endif; ?>
						<a href="<?php echo e(route ('pendidikan.create')); ?>">
                         <button class="btn btn-primary" type="button"><i 
							class="fa fa-plus"> Tambah </i></button></a>
                            <br><br>
                            <table class="table table-striped table-advance table-hover">
                                <tbody>
                                    <tr>
                                        <th><i class="icon_bag"></i> Nama</th>
                                        <th><i class="icon_document"></i> Tingkatan</th>
                                        <th><i class="icon_calender"></i> Tahun Masuk</th>
                                        <th><i class="icon_calender"></i> Tahun Keluar</th>
                                        <th><i class="icon_cogs" ></i> Action</th>
                                    </tr>
                                    <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td>
                                            <?php if($item->tingkatan==1): ?>
                                                TK
                                            <?php elseif($item->tingkatan==2): ?>
                                                SD
                                            <?php elseif($item->tingkatan==3): ?>
                                                SMP
                                            <?php elseif($item->tingkatan==4): ?>
                                                SMA/SMK
                                            <?php elseif($item->tingkatan==5): ?>
                                                D3
                                            <?php elseif($item->tingkatan==6): ?>
                                                D4/S1
                                            <?php elseif($item->tingkatan==7): ?>
                                                S2
                                            <?php elseif($item->tingkatan==8): ?>
                                                S3
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($item->tahun_masuk); ?></td>
                                        <td><?php echo e($item->tahun_keluar); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a  class="btn btn-warning" href="<?php echo e(route ('pendidikan.edit',$item->id)); ?>">
                                                <i class="fa fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
					</div>
				</section>
			</div>
		</div>
	</section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LATIHAN\resources\views/backend/pendidikan/index.blade.php ENDPATH**/ ?>