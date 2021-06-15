<?php $__env->startSection('content'); ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo e(url('dashboard')); ?>">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-filer-o"></i>Pendidikan</li>
                </ol>
            </div>
        </div>
        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <?php echo e(isset($aprilia_lecturel) ? 'Mengubah' : 'Menambahkan'); ?> Pendidikan
                    </header>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>There were some problems with you input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $erros->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" id="pendidikan_form" method="POST"
                        action="<?php echo e(isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) : route('pendidikan.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo isset($pendidikan) ? method_field('PUT') : ''; ?>

                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Nama Sekolah<span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nama" name="nama" minlength="5" type="text" value="<?php echo e(isset($pendidikan) ? $pendidikan->nama : ''); ?>"
                                    required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">Tingkatan<span
                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="tingkatan" id="tingkatan"  required>
                                            <option></option>
                                            <option value="1">TK</option>
                                            <option value="2">SD</option>
                                            <option value="3">SMP/MTs</option>
                                            <option value="4">SMA/SMK</option>
                                            <option value="5">D3</option>
                                            <option value="6">D4/S1</option>
                                            <option value="7">S2</option>
                                            <option value="8">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Tahun Masuk <span
                                        class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input id="tahun_masuk" type="text" name="tahun_masuk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Tahun selesai <span
                                            class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input id="tahun_keluar" type="text" name="tahun_keluar" class="form-control"
                                            required>
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="<?php echo e(route('pendidikan.index')); ?>"><button class="btn btn-default" type="button">Cencel</button></a>
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('content-css'); ?>
    <link href="<?php echo e(asset('backend/css/bootstrap-datepicker.css')); ?> " rel="stylesheet" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('content-js'); ?>
<script src="<?php echo e(asset('backend/js/bootstrap-datepicker.js')); ?> "></script>
<script type="text/javascript">
    $('#tahun_masuk').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });$('#tahun_keluar').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend/layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LATIHAN\resources\views/backend/pendidikan/create.blade.php ENDPATH**/ ?>