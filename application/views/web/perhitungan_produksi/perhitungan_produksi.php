<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" tyle="color: black">
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
                <a href="<?= base_url('web/data_hitung/hitung/add') ?>"
                    class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead style="font: size 3px; font-weight: bold; background-color: lightcyan; color: black">
                    <tr>
                            <th>Budget Pengolahan</th>
                            <th>TBS Awaal</th>
                            <th>Jml Jam Olah</th>
                            <th>Jml Jam Kerusakan</th>
                            <th>jml Jam Efektif</th>
                            <th>Kapasitas Olah Efektif</th>
                            <th>Total Lori Sisa</th>
                            <th>Kapasitas Lori</th>
                            <th>Total Olah</th>
                            <th>TBS Sisa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr  style="font: size 3px; background-color: aliceblue; color: black">
                                <td>
                                    <?= $datas->budget ?>
                                </td>
                                <td>
                                    <?= $datas->tbs_awal ?>
                                </td>
                                <td>
                                    <?= $datas->jam_olah ?>
                                </td>
                                <td>
                                    <?= $datas->jam_kerusakan ?>
                                </td>
                                <td>
                                    <?= $datas->jam_efektif ?>
                                </td>
                                <td>
                                    <?= $datas->kapasitas_olah ?>
                                </td>
                                <td>
                                    <?= $datas->restan ?>
                                </td>
                                <td>
                                    <?= $datas->kapasitas_lori ?>
                                </td>
                                <td>
                                    <?= $datas->olah ?>
                                </td>
                                <td>
                                    <?= $datas->jtbs_sisa ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('web/data_inti/inti/edit/' . $datas->divisi) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_inti/inti/delete/' . $datas->divisi) ?>"
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