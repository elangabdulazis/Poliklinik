
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    

    <!-- SEARCH FORM -->
 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url() ?>assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url() ?>assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
              <div class="card-header" style="background-color: aqua">
                <h3 class="card-title">Data Obat</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse" style="color: white">
                    <i class="fas fa-minus"></i></button>
                  
                </div>
              </div>

              <div class="card-body">

              	<button type="button" class="btn bg-gradient-danger" data-toggle="modal" data-target=".bd-example-modal-xl">Tambah Data</button>
              	<button type="button" class="btn bg-gradient-success">Export Excell</button>
              	<button type="button" class="btn bg-gradient-primary">Export Word</button>
               <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button> -->
              


                <table class="table table-bordered mt-3" >
        				  <thead>
        				    <tr>
        				      <th scope="col">No</th>
        				      <th scope="col">Nama Dokter</th>
        				      <th scope="col">Spesialis</th>
        				      <th scope="col">No Hp</th>
        				    </tr>
        				  </thead>
        				  <tbody>
        				    <tr>
        				      <th scope="row">1</th>
        				      <td>Mark</td>
        				      <td>Otto</td>
        				      <td>@mdo</td>
        				    </tr>
        				    <tr>
        				      <th scope="row">2</th>
        				      <td>Jacob</td>
        				      <td>Thornton</td>
        				      <td>@fat</td>
        				    </tr>
        				    <tr>
        				      <th scope="row">3</th>
        				      <td colspan="2">Larry the Bird</td>
        				      <td>@twitter</td>
        				    </tr>
        				  </tbody>
        			</table>
            </div>

            <!-- Modal -->
            
              <!-- /.card-footer-->
            </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>





  <!-- modal -->


  <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action=" <?= base_url().'dokter/tambah_aksi';?> ">

       <div class="form-group">
        <label for="kode_dokter">KODE DOKTER</label>
        <input type="text" class="form-control" name="kode_dokter" id="kode_dokter" placeholder="Kode Dokter">
      </div>
      <div class="form-group">
        <label for="namadokter">NAMA DOKTER</label>
        <input type="text" name="namadokter" class="form-control" id="namadokter" placeholder="Nama Dokter">
      </div>
      <div class="form-group">
        <label for="jeniskelamin">JENIS KELAMIN</label>
        <select class="form-control form-control-lg" id="jeniskelamin" name="jeniskelamin">
          <option>pria</option>
          <option>wanita</option>
        </select>
    </div>
    <div class="form-group">
        <label for="kotalahir">KOTA KELAHIRAN</label>
        <input type="text" class="form-control" id="kotalahir" name="kotalahir" placeholder="KOTA KELAHIRAN">
      </div>
      <div class="form-group">
        <label for="tgllahir">TANGGAL LAHIR</label>
        <input type="text" class="form-control" id="tgllahir" name="tgllahir" placeholder="Tanggal Lahir">
      </div>
    <div class="form-group">
        <label for="nohp">NO IZIN</label>
        <input type="text" class="form-control" id="noizin" name="noizin" placeholder="No Izin">
      </div>
      <div class="form-group">
        <label for="Alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
      </div>
         <div class="form-group">
        <label for="provinsi">PROVINSI</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi">
      </div>
      <div class="form-group">
        <label for="kota">KOTA</label>
        <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
      </div>
      <div class="form-group">
        <label for="kelurahan">KELURAHAN</label>
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan">
      </div>
      <div class="form-group">
        <label for="kecamatan">KECAMATAN</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
      </div>
      <div class="form-group">
        <label for="spesialis">SPESIALIS</label>
        <select class="form-control form-control-lg" id="spesialis" name="spesialis">
          <option>Mata</option>
          <option>Kulit</option>
        </select>
    </div>
      <div class="form-group">
        <label for="tarif">TARIF</label>
        <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Tarif">
      </div>
      <div class="form-group">
        <label for="email">EMAIL</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
      </div>
      <div class="form-group">
        <label for="nohp">PASSWORD</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="No hp">
      </div>
      <div class="form-group">
        <label for="universitas">KAMPUS ASAL</label>
        <input type="text" class="form-control" id="universitas" name="universitas" placeholder="UNIVERSITAS ASAL">
      </div>
      
   
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>

</form>
      </div>
      
    </div>
  </div>
</div>


  <!-- /.content-wrapper -->
 