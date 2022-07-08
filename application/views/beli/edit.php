  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <h1>Form Edit Beli</h1>
        <?php
            $hidden = ['idedit'=>$obj_beli->id];
        ?>
        <?php echo form_open("beli/save","",$hidden) ?>
        
   
        <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">tanggal :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-qrcode"></i>
                    </div>
                    </div> 
                    <input id="tanggal" name="tanggal" type="date" value="<?php echo $obj_beli->tanggal?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">jumlah :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                    </div> 
                    <input id="jumlah" name="jumlah" type="text" value="<?php echo $obj_beli->jumlah?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="users_id" class="col-4 col-form-label">User :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-hourglass-2"></i>
                    </div>
                    </div> 
                    <input id="users_id" name="users_id" type="text" value="<?php echo $obj_beli->users_id?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">produk_id :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-money"></i>
                    </div>
                    </div> 
                    <input id="produk_id" name="produk_id" type="text" value="<?php echo $obj_beli->produk_id?>" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->