<div class="container-fluid">

<!-- 1. membuat tampilan alert di tengah dan paling atas jika ingin membuat alert di bawah letakkan source code di bawah -->
    <div class="row mt-5 d-sm-flex">
        <div class="col-12">
            <?php if ($this->session->flashdata('primary')) : ?>
                <div class="alert alert-primary" role="alert" style="text-align: center;">
                <?= $this->session->flashdata('primary') ?>
                </div>
            <?php endif ?>
        </div>
    </div>


<!--2.  untuk membuat link teks data User dan dashboard -->
    <div class="mt-0 mb-0 d-flex justify-content-between">
        <a class="nav-link" href="<?= base_url() ?>web/data_delikernel/delikernel">
        <span class="h6 font-weight-bold" style=" color: primary;"><i class="fas fa-file"></i> Data Delivery Kernel</span>
        </a>
        <a class="nav-link" href="<?= base_url() ?>dashboard">
        <span class="h6 font-weight-bold" style="color: primary;"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
        </a>
    </div>

<!-- 3. DataTales Example -->
<!-- ada card-shadow mb-2 yang membuat jarak antar baris tabel -->
    <div class="card shadow mb-2">
        <div class="mt-3 mb-0 container-fluid">
<!-- 4. membuat Button tambah di sebelah kiri. untuk memindahkan button gunakan float:left atau float right -->
            <a href="<?= base_url('web/data_delikernel/delikernel/add') ?>" class="btn btn-info btn-sm mb-0" style="float: left;"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>

<!-- 5. membuat card body -->
    <div class="card-body">
        <hr style="color: black; border-style: solid; border-width: 1px;">
            <div class="table-responsive">
                <table class="table table-bordered table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>

<!--  6. untuk membuat head tabel kepala tabel-->
                    <tr>


                            <th class="text-center" style="color: black;"># </th>
                            <th class="text-center" style="color: black;">Delivery </th>
                            <th class="text-center" style="color: black;">Via </th>
                            <th class="text-center" style="color: black;">Do_No </th>
                            <th class="text-center" style="color: black;">Quantity </th>
                            <th class="text-center" style=" color: black;">Aksi</th>
                    </tr>
                    </thead>

<!-- 7. membat tbody atau isi dari tabel -->
                    <tbody>
<!-- 8. data ke database dan inisialisasi i=1 untuk mengisi kolom simbol tah #-->
                    <?php $i=1 ;?>
                    <?php foreach ($data as $datas): ?>
                        <tr style="font-size: 13px; color: black">
                            <td><?= $i ?></td>
                            <td><?= $datas->delivery ?></td>
                            <td><?= $datas->via ?></td>
                            <td><?= $datas->do_no ?></td>
                            <td><?= $datas->quantity ?></td>
<!-- 9. untuk membuat isi kolom aksi dengan lebar 70px -->
<td style="width: 70px;">
                            <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url('web/data_delikernel/delikernel/edit/' . $datas->id_delikernel) ?>" class=""><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                            <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url('web/data_delikernel/delikernel/delete/' . $datas->id_delikernel) ?>"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
                            </td>
                    </tr>
<!-- 8. membuat akhir dari endforeach -->
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>

                
        