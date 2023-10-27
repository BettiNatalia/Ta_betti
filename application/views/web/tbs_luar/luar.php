<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data TBS Luar</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_luar/luar/add') ?>"
                    class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                <thead style="font-size: 13px; font-weight: bold; background-color: lightcyan; color: black">
                        <tr>
                            <th>ID TBS <i class="fas fa-sort"></i></th>
                            <th>Asal TBS <i class="fas fa-sort"></i></th>
                            <th>Janjang <i class="fas fa-sort"></i></th>
                            <th>Bruto <i class="fas fa-sort"></i></th>
                            <th>Potong <i class="fas fa-sort"></i></th>
                            <th>Netto <i class="fas fa-sort"></i></th></th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <!--  inisialisasi variabel total-->
                    <?php
                    $total = array(
                        'janjang' => 0,
                        'bruto' => 0,
                        'potong' => 0,
                        'netto' => 0,
                        'grand_total'=> 0,
                    );
                    ?>

                        <?php $i = 1; ?>
                        <?php foreach ($data as $datas): ?>
                            <tr  style="font-size: 13px; color: black">
                                <td>
                                    <?= $datas->id_tbs ?>
                                </td>
                                <td>
                                    <?= $datas->asal_tbs ?>
                                </td>
                                <td>
                                    <?= $datas->janjang ?>
                                </td>
                                <td>
                                    <?= $datas->bruto ?>
                                </td>
                                <td>
                                    <?= $datas->potong ?>
                                </td>
                                <td>
                                    <?= $datas->netto ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_luar/luar/edit/' . $datas->id_tbs) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_luar/luar/delete/' . $datas->id_tbs) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>

                <!-- Tambahkan nilai ke total untuk setiap kolom -->
                        <?php
                        $total['janjang'] += $datas->janjang;
                        $total['bruto'] += $datas->bruto;
                        $total['potong'] += $datas->potong;
                        $total['netto'] += $datas->netto;
                        $total['grand_total'] += $datas->netto;
                        ?>

                         <!-- tambah kolom baru khusus total -->
                        <?php endforeach ?>
                        <tr style="background-color: lightcyan; color: black; font-size: 13px">
                            <td><strong>Total :</strong></td>
                            <td><strong></strong></td>
                            <td><strong><?= $total['janjang'] ?></strong></td>
                            <td><strong><?= $total['bruto'] ?></strong></td>
                            <td><strong><?= $total['potong'] ?></strong></td>
                            <td><strong><?= $total['netto'] ?></strong></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Earnings (Monthly) Card Example -->
                <table>
                <tr class="" style="color: black; font-weight: bold; text-align: center; font-size: 13px">
                            <td style="border: 4px solid blue"><strong>Total TBS Luar : <?= $total['bruto'] ?></strong></td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>