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
    

<!-- 2. untuk membuat link teks data role dan dashboard -->
    <div class="mt-0 mb-0 d-flex justify-content-between">
        <a class="nav-link" href="<?= base_url() ?>web/data_role/role">
        <span class="h6 font-weight-bold" style=" color: primary;"><i class="fas fa-file"></i> Data Role</span>
    </a>
        <a class="nav-link" href="<?= base_url() ?>dashboard">
        <span class="h6 font-weight-bold" style="color: primary;"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
    </a>
    </div>


<!-- DataTales Example -->
<!--3.  ada card-shadow mb-2 yang membuat jarak antar baris tabel -->
<div class="card shadow mb-2">
    <div class="mt-3 mb-0 container-fluid">

<!-- 4. membuat button tambah data disebelah kiri menggunakan style="float: left" jika sebelah kanan itu right -->
    <a href="<?= base_url('web/data_role/role/add') ?>" class="btn btn-info btn-sm mb-0" style="float: left;"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>
    
<!-- 5. membuat card body dan garis lurus setelah button tambah dengan menggunakan tag hr -->
    <div class="card-body">
    <hr style="color: black; border-style: solid; border-width: 1px;">
        <div class="table-responsive">
            <table class="table table-bordered table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
<!--  6. membuat nama kolom atau atribut-->
                <tr>
                    <th class="text-center" style= "color: black;"># </th>
                    <th class="text-center" style= "color: black;">Jabatan </th>
                    <th class="text-center" style= "color: black;">Aksi</th>
                </tr>
            </thead>
<!-- 7. membuat tbody isi kolom pada baris kedua -->
            <tbody>
                <?php $i=1 ;?>
                <?php foreach ($data as $datas) : ?>
                    <tr style="font-size: 13px; color: black">
                    <td><?= $i ?></td>
                    <td><?= $datas->jabatan ?></td>
<!-- 8. membuat kolom aksi dengan lebar 70px menampung 2 aksi -->
                    <td style="width: 70px;">
                    <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url('web/data_role/role/edit/' . $datas->id_role) ?>" class=""><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                    <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url('web/data_role/role/delete/' . $datas->id_role) ?>"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
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



