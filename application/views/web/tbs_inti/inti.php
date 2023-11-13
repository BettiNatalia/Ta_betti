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
        <a class="nav-link" href="<?= base_url() ?>web/data_inti/inti">
            <span class="h6 font-weight-bold" style=" color: primary;"><i class="fas fa-file"></i> Data TBS Inti</span>
        </a>
        <a class="nav-link" href="<?= base_url() ?>dashboard">
        <span class="h6 font-weight-bold" style="color: primary;"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
        </a>
    </div>

<!-- 3. DataTales Example -->
<!-- ada card-shadow mb-2 yang membuat jarak antar baris tabel -->
    <div class="card shadow mb-2">
    <div class="mt-3 col-12">
<!-- 4. membuat Button tambah di sebelah kiri. untuk memindahkan button gunakan float:left atau float right -->
            <a href="<?= base_url('web/data_inti/inti/add') ?>" class="btn btn-info btn-sm mb-0" style="float: left;"><i class="fas fa-plus"></i>Tambah Data</a>
            <a href="<?php echo base_url('web/data_inti/inti/print'); ?>" class="btn btn-info btn-sm" style="float: right; color: black;"> <i class="fa fa-print"></i>Print</a>
    </div>

<!-- 5. membuat card body -->
    <div class="card-body">
        <hr style="color: black; border-style: solid; border-width: 1px;">
            <div class="table-responsive">
                <table class="table table-bordered table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
<!--  6. membuat nama kolom atau atribut-->
                            <tr>
                                    <th class="text-center" style=" color: black;">#</th>
                                    <th class="text-center" style=" color: black;">Tanggal</th>
                                    <!-- harus menggunakan style untuk membuat teks ketengah dan tidak bisa menggunakan class d-flex karena itu bisa untuk button -->
                                    <th class="text-center" style=" color: black;">Aksi</th>
                            </tr>
                        </thead>

<!-- 7. untuk membuat isi tabel atau tbody -->
                        <tbody>
<!-- 8. inisialisasi i=1 untuk membuat nilai dari kolom simbol #(pagar) -->
                        <?php $i= 1;?>
                        <?php foreach ($data as $datas): ?>
                            <tr style="font-size: 13px; color: black">
                                    <td><?= $i ?></td>
                                    <td><?= $datas->tanggal ?></td>
                                    <td style="width: 180px;">
<!-- 9. untuk membuat button edit dan hapus -->
                                    <a href="<?= base_url('web/data_inti/inti/tbs_inti/' . $datas->id_tanggal) ?>" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i>TBS Inti</a>
                                    <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url('web/data_inti/inti/edit/' . $datas->id_tanggal) ?>" class=""><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                                    <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url('web/data_inti/inti/delete/' . $datas->id_tanggal) ?>"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
                                    </td>
                            </tr>
<!-- 12. membuat akhir dari endforeach -->
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>


