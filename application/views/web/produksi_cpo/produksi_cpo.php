<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" tyle="color: black">
        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data Produksi Calm Palm Oil</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_produksi_cpo/cpo/add') ?>"
                    class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead style="font: size 3px; font-weight: bold; background-color: lightcyan; color: black">
                    <tr>
                            <th>ID Asisten Pemasaran</th>
                            <th>Nama Asisten</th>
                            <th>Ukuran Tank</th>
                            <th>Tinggi</th>
                            <th>Volume</th>
                            <th>Suhu</th>
                            <th>BJ Suhu</th>
                            <th>Stok</th>
                            <th>CPO HI</th>
                            <th>Total CPO</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  inisialisasi variabel total-->
                    <?php
                    $total = array(
                        'total_cpo' => 0,
                        
                    );
                    ?>
                        <?php foreach ($data as $datas): ?>
                            <tr  style="font: size 3px; background-color: aliceblue; color: black">
                                <td>
                                    <?= $datas->id_asisten_pemasaran ?>
                                </td>
                                <td>
                                    <?= $datas->nama_asisten ?>
                                </td>
                                <td>
                                    <?= $datas->ukuran_tank ?>
                                </td>
                                <td>
                                    <?= $datas->tinggi ?>
                                </td>
                                <td>
                                    <?= $datas->volume ?>
                                </td>
                                <td>
                                    <?= $datas->suhu ?>
                                </td>
                                <td>
                                    <?= $datas->bj_suhu ?>
                                </td>
                                <td>
                                    <?= $datas->stok ?>
                                </td>
                                <td>
                                    <?= $datas->cpo_hi ?>
                                </td>
                                <td>
                                    <?= $datas->total_cpo ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_produksi_cpo/cpo/edit/' . $datas->id_asisten_pemasaran) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_produksi_cpo/cpo/delete/' . $datas->id_asisten_pemasaran) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        $total['total_cpo'] += $datas->total_cpo;
                       
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
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td><strong></strong></td>
                        <td><strong><?= $total['total_cpo'] ?></strong></td>
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
                            <td><strong>Total CPO : <?= $total['total_cpo'] ?></strong></td>
                            </tr>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>