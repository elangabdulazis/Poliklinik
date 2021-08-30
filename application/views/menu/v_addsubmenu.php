<div class="content-wrapper" style="min-height: 1537.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-3"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Collapsed Sidebar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card card-primary">
              <div class="card-header" >
                <h3 class="card-title">Sub Menu</h3>
                <div class="card-tools">
                  <button type="submit" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>

              <div class="card-body">
                <form id="formdata" method="post" action=" <?= base_url().'menu/simpansubmenu';?> ">

                  <div class="form-group">
                  <select name="menu_id" id="menu_id" class="form-control">
                    <option value="">Select Menu</option>
                    <?php foreach ($menu as $m): ?>
                      <option value="<?= $m['id'];  ?>"><?= $m['menu'];  ?>
                      </option>
                    <?php endforeach;  ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul"  class="form-control" id="judul" placeholder="Judul">
                </div>
                
                <div class="form-group">
                  <label for="url">Url</label>
                  <input type="text" name="url"  class="form-control" id="url" placeholder="Url">
                </div>
                <div class="form-group">
                  <label for="icon">Icon</label>  
                  <input type="text" name="icon"  class="form-control" id="icon" placeholder="icon">
                </div>
                <div class="form-group">
                  <div class="form-check">
                  <input type="checkbox" name="is_active"  class="form-check-input" id="is_active" placeholder="active" value="1">
                  <label class="form-check-label" for="is_active">
                    Active?
                  </label>
                  </div>
                </div>
              
                
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="btn" class="btn btn-primary">Simpan Data</button>

      </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                    
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>