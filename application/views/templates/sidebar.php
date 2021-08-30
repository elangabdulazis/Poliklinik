<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>assets/index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">POLIKLINIK</span>
    </a>

    <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/foto/') . $user['image'];?>"  style="height: 70px; width: 70px;">
        </div>
        <div class="info">
          <span class="mr-2 d-none d-lg-inline text-light small"><?= $user['nama'];?></span><br><br>
          
        </div>
          
      </div>

      <!-- LOPING MENU -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Query Menu -->
          <?php 

            $level = $this->session->userdata('level');
            $queryMenu = "SELECT `user_menu`.`id`,`menu`
                          FROM `user_menu` JOIN `user_access_menu` 
                          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                          WHERE `user_access_menu`.`level_id` = $level
                          ORDER BY `user_access_menu`.`menu_id` ASC ";

            $menu = $this->db->query($queryMenu)->result_array();
            ?>
             <?php foreach ($menu as $m):?>
              <div class=" text-info">
                  <?= $m['menu']; ?>
              </div>



              <!-- SUB MENU -->
              <?php 
              $menuId = $m['id'];
              $querySubMenu = "SELECT * FROM `user_sub_menu` JOIN `user_menu` 
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id`= $menuId  
                                AND `user_sub_menu`.`is_active`= 1 ";
                        
              $subMenu = $this->db->query($querySubMenu)->result_array();
               ?>

               <?php foreach ($subMenu as $sm) :?>
                
                <li class="nav-item active">
                  <a href="<?=base_url($sm['url']); ?>" class="nav-link">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <p><?=$sm['judul'];?></p>
                  </a>
                </li>
                 
          </li>
   
              <?php endforeach;?>                


            <?php endforeach;?>
           


          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php  ?>assets/./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
         

          <!-- <li class="nav-item">
            <a href="<?php echo base_url() ?>dokter/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Dokter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>jadwal/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Jadwal Dokter</p>
            </a>
          </li> -->
         

          <!-- <li class="nav-item">
            <a href="<?php echo base_url() ?>pasien/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Pasien</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url()?>pendaftaran/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Daftar Berobat</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Obat/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Obat</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url() ?>Diagnosa/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Diagnosa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Tindakan/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Tindakan</p>
            </a>
         
          <li class="nav-item">
            <a href="<?php echo base_url() ?>karyawan/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Karyawan</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url() ?>spesialis/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Spesialis</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>resep/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Resep</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>listpasien/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>List Pasien</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>User/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>User</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Labor/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Lab</p>
            </a>
          </li> -->
         <!--  <li class="nav-item">
            <a href="<?php echo base_url() ?>Profile/index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Profile</p>
            </a>
          </li> -->
          
       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

