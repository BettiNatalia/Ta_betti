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


<!--2.  untuk membuat link teks data Divisi dan dashboard -->
    <div class="mt-0 mb-0 d-flex justify-content-between">
        <a class="nav-link" href="<?= base_url() ?>web/data_divisi/divisi">
        <span class="h6 font-weight-bold" style=" color: primary;"><i class="fas fa-file"></i> Data Divisi</span>
    </a>
        <a class="nav-link" href="<?= base_url() ?>dashboard">
        <span class="h6 font-weight-bold" style="color: primary;"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
    </a>
    </div>


<!-- 3. card awal membuat tabel dengan mb-4 perbaris tabel -->
<!-- DataTales Example -->
<div class="card shadow mb-2">
    <div class="mt-3 mb-0 container-fluid">

<!-- 4. membuat button tambah di sebelah kiri menggunakan style sebelah kanan dengan menggunakan style="float: left" -->
    <a href="<?= base_url('web/data_divisi/divisi/add') ?>" class="btn btn-info btn-sm" style="float: left;"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>
    
<!-- 5. membuat card body -->
<div class="card-body">
    <hr style="color: black; border-style: solid; border-width: 1px;">
        <div class="table-responsive">
            <table class="table table-bordered table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
<!--6. membuat list kolom atau nama masing-maisng kolom yang ingin ditambahkan -->
                        <th class="text-center" style="color: black;"># <i class="fas fa-sort"></i></th>
                        <th class="text-center" style="color: black;">Divisi <i class="fas fa-sort"></i></th>
                        <th class="text-center" style="color: black;">Aksi</th>
                    </tr>
                </thead>


<!-- 7. membuat isi tabel atau tbody -->
                    <tbody>
<!-- 8. data ke database disini ada inisialisasi variabel i=1 yang menampilkan nilai pada tag # -->
                        <?php $i=1 ;?>
                        <?php foreach ($data as $datas): ?>
                    <tr style="font-size: 13px; color: black">
                            <td><?= $i ?></td>
                            <td ><?= $datas->divisi ?></td>
<!-- 9. membuat kolom aksi dengan lebar 70px menampung 2 aksi -->
                            <td style="width: 70px;">
                                <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url('web/data_divisi/divisi/edit/' . $datas->id_divisi) ?>" class=""><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                                <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url('web/data_divisi/divisi/delete/' . $datas->id_divisi) ?>"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
                            </td>
                    </tr>
<!-- 10. membuat akhir dari endforeach -->
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
</div>
</div>
</div>
