<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" tyle="color: black">
        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data Produksi Kernel</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_produksi_kernel/kernel/add') ?>"
                    class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead style="font: size 3px; font-weight: bold; background-color: lightcyan; color: black">
                    <tr>
                            <th>ID Produksi</th>
                            <th>ID Asisten Pemasaran</th>
                            <th>Nama Asisten</th>
                            <th>Ukuran</th>
                            <th>Stok</th>
                            <th>Kernel HI</th>
                            <th>Total Kernel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total = array(
                        'total_kernel' => 0,
                        
                    );
                    ?>
                        <?php foreach ($data as $datas): ?>
                            <tr  style="font: size 3px; background-color: aliceblue; color: black">
                                <td>
                                    <?= $datas->id_produksi ?>
                                </td>
                                <td>
                                    <?= $datas->id_asisten_pemasaran ?>
                                </td>
                                <td>
                                    <?= $datas->nama_asisten ?>
                                </td>
                                <td>
                                    <?= $datas->ukuran ?>
                                </td>
                                <td>
                                    <?= $datas->stok ?>
                                </td>
                                <td>
                                    <?= $datas->kernel_hi ?>
                                </td>
                                <td>
                                    <?= $datas->total_kernel ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_produksi_kernel/kernel/edit/' . $datas->id_produksi) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_produksi_kernel/kernel/delete/' . $datas->id_produksi) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                                <?php
                        $total['total_kernel'] += $datas->total_kernel;
                       
                        ?>
        <!-- tambah kolom baru khusus total -->
                        <?php endforeach ?>
                        <tr style="background-color: lightcyan; color: black">
                        <td><strong>Total:</strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td><strong><?= $total['total_kernel'] ?></strong></td>
                        <td><strong></strong></td>
                            
                        </tr>

                        

                        <!-- batas dari kolom baru -->
                    </tbody>
                </table>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-2 card-body btn-sm"
                     style="background-color: paleturquoise; color: black; font-weight: bold; text-align: center">
                    <div class="btn-sm mb-0" style="background-color: lightcyan">
                            <tr>
                            <td><strong>Total CPO : <?= $total['total_kernel'] ?></strong></td>
                            </tr>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>