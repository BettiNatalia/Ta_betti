<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data TBS Divisi</h1>
                        <a href="<?=base_url('web/data_divisi/divisi/add');?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm " style="color: black; background-color: lightcyan"><i
                                class="fas fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

					<!-- 2. untuk membuat warna peringatan warna biru -->
					<?php if ($this->session->flashdata('primary')): ?>
						<div class="alert alert-primary" role="alert">
							<?= $this->session->flashdata('primary') ?>
						</div>
					<?php endif ?>
                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?php base_url('divisi'); ?>" method="post">
                            <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="search" name="keyword" autocomplete="off" autofocus>
  <div class="input-group-append">
    <input class="btn btn-primary" type="submit" name="submit">
  </div>
</div>
                            </form>
                        </div>
                    </div>

    
                <div class="row">
                    	<div class="card col-sm-12">
                    		<div class="card-header">
                    			<label for="" class="card-tittle font-weight-bold" style="color: black">Data TBS Divisi</label>
                    			</div>
                    			<div class="card-body" style="background-color: lightcyan">
                    				<div class="table-responsive">
                    					<table class="table table-boardered">
                                        <thead style="font-size: 13px; font-weight: bold; color: black">
                    <tr>
                            <th># <i class="fas fa-sort"></i></th>
                            <th>Divisi <i class="fas fa-sort"></i></th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
       

            <!-- data ke database -->
                    <?php $i=1 ;?>
                    <?php foreach ($data as $datas): ?>
                        <tr style="font-size: 13px; color: black">
                            <td><?= $i ?></td>
                            <td><?= $datas->divisi ?></td>
                            <td>
                                <a href="<?= base_url('web/data_divisi/divisi/edit/' . $datas->id_divisi) ?>"
                                    class="btn btn-info btn-sm">Edit</a>
                                <a href="<?= base_url('web/data_divisi/divisi/delete/' . $datas->id_divisi) ?>"
                                    class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>

                
        <!-- tambah kolom baru khusus total -->
                        <?php $i++;?>
                        <?php endforeach ?>
                        

                        

                        <!-- batas dari kolom baru -->
                    </tbody>
                </table>
                <!-- Earnings (Monthly) Card Example -->
               
            </div>
        </div>
    </div>
</div>
</div>