<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" tyle="color: black">
        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data Pemasaran CPO</h1>
    </div>

    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_pemcpo/pemcpo/add') ?>"
                    class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead style="font: size 3px; font-weight: bold; background-color: lightcyan; color: black">
                    <tr>
                            <th>ID Pemasaran</th>
                            <th>Konsumen</th>
                            <th>Via</th>
                            <th>Do No</th>
                            <th>Quantity</th>
                            <th>HI</th>
                            <th>S/D HI</th>
                            <th>Sisa Do</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr  style="font: size 3px; background-color: aliceblue; color: black">
                                <td>
                                    <?= $datas->id_pemasaran ?>
                                </td>
                                <td>
                                    <?= $datas->konsumen ?>
                                </td>
                                <td>
                                    <?= $datas->via ?>
                                </td>
                                <td>
                                    <?= $datas->do_no ?>
                                </td>
                                <td>
                                    <?= $datas->quantity ?>
                                </td>
                                <td>
                                    <?= $datas->pem_hi ?>
                                </td>
                                <td>
                                    <?= $datas->sd_hi ?>
                                </td>
                                <td>
                                    <?= $datas->sisa_do ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_pemcpo/pemcpo/edit/' . $datas->id_pemasaran) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_pemcpo/pemcpo/delete/' . $datas->id_pemasaran) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>