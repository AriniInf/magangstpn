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
                                        <th>Semester Melakukan</th>
                                        <th>Nama Kategori</th>
                                        <th>Pelanggaran</th>
                                        <th>Jumlah</th>
                                       </tr>
                                    </thead>
                                    <?php foreach ($data as $y) { ?> 
                                    <tr>
                                      <td><?php echo $y->smt_melakukan?></td>
                                      <td><?php echo $y->nama_kategori?></td>
                                      <td><?php echo $y->nama_peristiwa?></td>
                                      <td><?php echo $y->terserah?></td>
                                    <?php }?>
                                    <!-- <tr class="bg-danger">
                                      <td colspan="3"><strong><center>Total Pelanggaran : </center></strong></td>
                                      <td><?php echo $data[terserah]?></td>
                                    </tr> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
             </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->