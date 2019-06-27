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
                                        <th>Nama Taruna</th>
                                        <th>IPS</th>
                                        <th>IPK</th>
                                        <th>ACTION</th>
                                       </tr>
                                    </thead>
                                    <?php foreach ($data as $y) { ?> 
                                    <tr>
                                      <td><?php echo $y->nim?></td>
                                      <td><?php echo $y->nama_mhs?></td>
                                      <td><?php echo "blabla"?></td>
                                      <td><?php echo "blabla"?></td>
                                       <td>
                                        <?php echo anchor('main/peristiwa/show_id/'.$y->nim,'Detail');?>
                                      </td>
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