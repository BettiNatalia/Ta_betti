<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="color: black">
        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data TBS Inti</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_inti/inti/add') ?>" class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class="table table-hover table-sm">
                    <thead style="font-size: 13px; font-weight: bold; background-color: lightcyan; color: black">
                        <tr>
                            <th>ID Inti <i class="fas fa-sort"></i></th>
                            <th>Divisi <i class="fas fa-sort"></i></th>
                            <th>Janjang <i class="fas fa-sort"></i></th>
                            <th>Tonase <i class="fas fa-sort"></i></th>
                            <th>BJR <i class="fas fa-sort"></i></th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total = array(
                        'janjang' => 0,
                        'tonase' => 0,
                        'BJR' => 0,
                        'tonase_total' => 0,
                    );
                    ?>

                    <?php $i = 1; ?>
                    <?php foreach ($data as $datas): ?>
                        <tr style="font-size: 13px; background-color: aliceblue; color: black">
                            <td><?= $i ?></td>
                            <td><?= $datas->divisi ?></td>
                            <td><?= $datas->janjang ?></td>
                            <td><?= $datas->tonase ?></td>
                            <td><?= $datas->BJR ?></td>
                            <td>
                                <a href="<?= base_url('web/data_inti/inti/edit/' . $datas->id_inti) ?>"
                                    class="btn btn-info btn-sm">Edit</a>
                                <a href="<?= base_url('web/data_inti/inti/delete/' . $datas->id_inti) ?>"
                                    class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>

                        <?php
                        $total['janjang'] += $datas->janjang;
                        $total['tonase'] += $datas->tonase;
                        $total['BJR'] += $datas->BJR;
                        $total['tonase_total'] += $datas->tonase;
                        $i++;
                        ?>
                    <?php endforeach ?>
                    <tr style="background-color: lightcyan; color: black">
                        <td><strong>Total:</strong></td>
                        <td><strong></strong></td>
                        <td><strong><?= $total['janjang'] ?></strong></td>
                        <td><strong><?= $total['tonase'] ?></strong></td>
                        <td><strong><?= $total['BJR'] ?></strong></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tr class="" style="color: black; font-weight: bold; text-align: center; font-size: 13px">
                            <td style="border: 4px solid blue"><strong>Total TBS Inti : <?= $total['tonase_total'] ?></strong></td>
                </tr>
                </table>
        </div>
    </div>
</div>
</div>