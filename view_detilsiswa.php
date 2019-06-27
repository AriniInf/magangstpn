<section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peristiwa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>NIM</th>
                    <th>Nama Peristiwa</th>
                    <th>Sex</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                   </tr>
                </thead>
                <?php foreach ($ini as $y) {?> 
                <tr>
                  <td><?php echo $y->nim?></td>
                  <td><?php echo $y->nama_mhs?></td>
                  <td><?php echo $y->sex?></td>
                  <td><?php echo $y->prodi?></td>
                  <td><?php echo $y->tahun?></td>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
             </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->