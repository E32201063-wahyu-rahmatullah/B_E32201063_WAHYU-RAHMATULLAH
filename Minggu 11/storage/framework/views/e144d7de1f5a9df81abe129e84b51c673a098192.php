<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="active">
          <a class="" href="<?php echo e(url('dashboard')); ?>">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
                  </a>
        </li>
        <li>
              <a class="" href="<?php echo e(url('profile')); ?>">
                  <i class="icon_profile"></i>
                  <span>Profile</span>
              </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Riwayat Hidup</span>
              <span class="menu-arrow arrow_carrot-right"></span>
          </a>
          <ul class="sub">
            <li><a class="" href="<?php echo e(url('pendidikan')); ?>">Pendidikan</a></li>
            <li><a class="" href="<?php echo e(url('pengalaman')); ?>">Pengalaman</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
  <!--sidebar end-->
<?php /**PATH C:\xampp\htdocs\LATIHAN\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>