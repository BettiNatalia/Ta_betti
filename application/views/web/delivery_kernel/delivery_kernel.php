<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="color: black">
        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data Delivery Kernel</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    
                    <div class="row">
                    	<div class="card col-sm-12">
                    		<div class="card-header">
                    			<label for="" class="card-tittle font-weight-bold" style="color: black;">Data Delivery Kernel</label>
                    			</div>
                    			<div class="card-body" style="background-color: lightcyan">
                    				<div class="table-responsive">
                    					<table class="table table-boardered">
                                        <thead style="font-size: 13px; font-weight: bold; color: black">
                    <tr>
                            <th># <i class="fas fa-sort"></i></th>
                            <th>Delivery <i class="fas fa-sort"></i></th>
                            <th>Via <i class="fas fa-sort"></i></th>
                            <th>Do_No <i class="fas fa-sort"></i></th>
                            <th>Quantity <i class="fas fa-sort"></i></th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
       

            <!-- data ke database -->
                    <?php $i=1 ;?>
                    <?php foreach ($data as $datas): ?>
                        <tr style="font-size: 13px; color: black">
                            <td><?= $i ?></td>
                            <td><?= $datas->delivery ?></td>
                            <td><?= $datas->via ?></td>
                            <td><?= $datas->do_no ?></td>
                            <td><?= $datas->quantity ?></td>
                            <td>
                                <a href="<?= base_url('web/data_delikernel/delikernel/edit/' . $datas->id_delikernel) ?>"
                                    class="btn btn-info btn-sm">Edit</a>
                                <a href="<?= base_url('web/data_delikernel/delikernel/delete/' . $datas->id_delikernel) ?>"
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