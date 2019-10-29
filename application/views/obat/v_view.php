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
         <div class="card">
              <div class="card-header" style="background-color: aqua">
                <h3 class="card-title">Data Obat</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse" style="color: white">
                    <i class="fas fa-minus"></i></button>
                  
                </div>
              </div>

              <div class="card-body">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
                <button type="button" class="btn bg-gradient-danger mb-3" data-toggle="modal" data-target=".bd-example-modal-xl">Tambah Data</button>
                <button type="button" id="export" class="btn bg-gradient-success mb-3" >Export Excell</button>
                <button type="button" class="btn bg-gradient-primary mb-3">Export Word</button>
               <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button> -->
              
                <table id="tabel_id" class="table table-bordered mt-3 mb-3" >
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Obat</th>
                      <th scope="col">Jenis Obat</th>
                      <th scope="col">tanggal masuk</th>
                      <th scope="col">expired</th>
                      <th scope="col">keterangan</th>
                      <th scope="col">harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                      <?php foreach($obat as $row) : ?>
                        <tr>
                          <th scope="row"><?= $i; ?></th>
                          <td><?= $row["nama_obat"] ?></td>
                          <td><?= $row["jenis_obat"] ?></td>
                          <td><?= $row["tgl_masuk"] ?></td>
                          <td><?= $row["expired"] ?></td>
                          <td><?= $row["keterangan"] ?></td>
                          <td><?= $row["harga"] ?></td>
                          <td>
                           <a href="" class="btn btn-primary">Detai</a>
                           <?php echo anchor('obat/edit/'.$row['kd_obat'],'<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?>
                           <a href="<?= base_url()?>obat/hapus/<?= $row['kd_obat']?> " class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                           
                          </td>
                         
                        </tr>
                      <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
              </table>
            </div>
       </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->  
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
        
        <form id="formdata" method="post" action=" <?= base_url().'obat/add_data';?> ">

             <div class="form-group">
              <input type="hidden" class="form-control" name="kode_obat" id="kode_obat">
            </div>
            <div class="form-group">
              <label for="namaobat">NAMA OBAT</label>
              <input type="text" name="namaobat"  class="form-control" id="namaobat" placeholder="Nama Obat">
            </div>
            <div class="form-group">
              <label for="jenisobat">JENIS Obat</label>
              <select class="form-control form-control-lg" id="jenisobat" name="jenisobat">
                <option>Pil</option>
                <option>tablet</option>
              </select>
          </div>
          <div class="form-group">
            <label for="tgl_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" >
          </div>
          <div class="form-group">
            <label for="expired">EXPIRED OBAT</label>
            <input type="date" class="form-control" id="expired" name="expired" placeholder="Expired Obat">
          </div>
          <div class="form-group">
            <label for="keterangan">KETERANGAN</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan Obat">
          </div>
         <div class="form-group">
            <label for="harga">harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="harga">
          </div>
                
   
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="btn" class="btn btn-primary">Simpan Data</button>

      </form>
    
      </div>
      
    </div>
  </div>
</div>

<script>
$(function(){ 

  $('h3').mouseenter(function(){
    $('h3').css('color','red');
  });
  $('h3').mouseleave(function(){
    $('h3').css('color','black');
  });

  const flashData = $('.flash-data').data('flashdata');
  if(flashData){
    
    Swal.fire({
      title : 'Data Obat ',
      text  : 'Berhasil '+ flashData,
      type  : 'success'
    });
  }

  $('.tombol-hapus').click(function(e){
    e.preventDefault();

    const href = $(this).attr('href');

    Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Menghapus data ini",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus'
    }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  })

  });
});


  

  

  
</script>
 