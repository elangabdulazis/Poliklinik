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
                <h3 class="card-title">Jadwal Dokter</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse" style="color: white">
                    <i class="fas fa-minus"></i></button>
                  
                </div>
              </div>

              <div class="card-body" style="background-color: #212529; color: white;">
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
                <a href="<?= base_url()?>jadwal/tambah" class="btn btn-danger mb-3">Tambah Data</a>
                <!-- <button type="button" id="btncel" class="btn bg-gradient-success mb-3" >Export Excell</button>
                <button type="button" class="btn bg-gradient-primary mb-3">Export Word</button> -->
               <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button> -->
              
                <table id="tabel_id" class="table table-bordered mt-3 mb-3" >
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Dokter</th>
                      <th scope="col">Poli</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Status</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $i = 1; ?>
                      <?php foreach($jadwal as $row) : ?>
                        <tr>
                          <th scope="row"><?= $i; ?></th>
                          <td><?= $row["namadokter"] ?></td>
                          <td><?= $row["namapoli"] ?></td>
                          <td><?= $row["waktu"] ?></td>
                          <td><?= $row["tanggal"] ?></td>
                          <td><?= $row["status"] ?></td>
                          <td><?= $row["keterangan"] ?></td>
                          <td><img src="<?= base_url()?>assets/foto/<?= $row['photo']?>" height="50px"></td>
                          
                          <td>
                           <a href="" class="btn btn-primary">Detai</a>
                           <button type="button" onclick="submit(<?= $row['kd_jadwal']?>)" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fa fa-edit"></i></button>
                           <a href="<?= base_url()?>jadwal/hapus/<?= $row['kd_jadwal']?> " class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
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
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
          <form action="<?=base_url('jadwal/update') ?>" method="post">

             <div class="form-group">
                    <input type="hidden" class="form-control" name="kd_jadwal" id="kd_jadwal" placeholder="Kode Dokter">
                </div>
                <div class="form-group">
                    <label for="kd_dokter">Dokter</label>
                    <select class="form-control form-control-lg" id="kd_dokter" name="kd_dokter">
                      <?php foreach($dokter as $row) : ?>
                      <option class="s<?= $row['kd_dokter']?>s" value="<?= $row['kd_dokter']?>"><?= $row['nama'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
           <!--       <div class="form-group">
                    <label for="foto">FOTO</label>
                    <input type="text" class="form-control" id="foto" name="foto" readonly="">
                </div> -->
               
               <div class="form-group">
                    <label for="jadwal">jadwal</label>
                   <input type="date" class="form-control" id="jadwal" name="jadwal" >
                </div>

                <div class="form-group">
                    <label for="status">STATUS</label>
                   <input type="text" class="form-control" id="status" name="status" >
                </div>
      
   
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah Data</button>

      </form>
    
      </div>
      
    </div>
  </div>
</div>


<script>
  $(function(){
      //Timepicker
    $('#waktu').datetimepicker({
      format: 'LT'
    });

  })
      //jadwal
    


  const flashData = $('.flash-data').data('flashdata');
    if(flashData){
    Swal.fire({
      title : 'Data Jadwal ',
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

  function submit(x){

    $.ajax({
          type     : 'POST',
          data     : 'kd_jadwal='+x,
          url      : '<?= base_url()."jadwal/edit"?>',
          dataType : 'json',
          success  : function(hasil){
            console.log(hasil);
            $("[name='kd_jadwal']").val(hasil[0].kd_jadwal);
            $("[name='waktu']").val(hasil[0].waktu);
            $("[name='jadwal']").val(hasil[0].tanggal);
            $("[name='status']").val(hasil[0].status);

            console.log($('#kd_dokter').val());

            var kode = hasil[0].kd_dokter;
            console.log('s'+kode+'s');
            $('.s'+kode+'s').attr('selected', '');

          }
        }); 
  }

  getFoto();
  function getFoto(){
    var kd_dokter = $('#kd_dokter').val();
    console.log(kd_dokter);
        $.ajax({

            type     : 'POST',
            data     : 'kd_dokter='+kd_dokter,
            url      : '<?= base_url()."jadwal/getFoto"?>',
            dataType : 'json',
            success  : function(hasil){
              console.log(hasil);

              $("[name='foto']").val(hasil[0].photo);
            
              
            }

        });
  }
  $('select').on('change', function()
    {
      getFoto();
    });
</script>