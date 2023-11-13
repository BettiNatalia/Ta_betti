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
        <a class="nav-link" href="<?= base_url() ?>web/data_tankikernel/tankikernel">
        <span class="h6 font-weight-bold" style=" color: primary;"><i class="fas fa-file"></i> Data Tanki Kernel</span>
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
            <a href="<?= base_url('web/data_tankikernel/tankikernel/add') ?>" class="btn btn-info btn-sm mb-0" style="float: left;"><i class="fas fa-plus"></i>Tambah Data</a>
    </div>

<!-- 5. membuat card body -->
    <div class="card-body">
    <hr style="color: black; border-style: solid; border-width: 1px;">
        <div class="table-responsive">
            <table class="table table-bordered table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
<!--  6. membuat nama kolom atau atribut-->
                        <tr>
                            <th class="text-center" style="color: black;">#</th>    
                            <th class="text-center" style="color: black;">Ukuran</th>
                            <th class="text-center" style="color: black;">Kapasitas</th>
                            <th class="text-center" style=" color: black;">Aksi</th>
                        </tr>
<!-- 7. penutup thead-->
                    </thead>
<!-- 8. membuat body atau isi tabel -->
                    <tbody>
<!-- 9. membuat inisialisasi variabel i = 1 -->
                        <?php $i = 1; ?>
                        <?php foreach ($data as $datas) : ?>
<!-- 10. data adalah objek dan datas adalah variabel bagian ini untuk menampilkan nilai dari data kolom-->
                            <tr style="font-size: 13px; color: black">
                            <td><?php echo $i ?></td>
                            <td><?php echo $datas->ukuran ?></td>
                            <td><?php echo $datas->kapasitas ?></td>
<!-- 11. membuat satu kolom pada kolom aksi dengan lebar kolom 100px -->
                            <td style="width: 100px;">
                            <a class=" btn-sm bg-gradient-primary" onclick="return confirm('Anda Yakin Ingin Edit')" href="<?= base_url('web/data_tankikernel/tankikernel/edit/' . $datas->id_tkernel) ?>" class=""><i class="far fa-edit" style="color: #fcfcfd;"></i></a>
                            <a class="btn-sm bg-gradient-danger" onclick="return confirm('Anda Yakin Ingin Hapus')" href="<?= base_url('web/data_tankikernel/tankikernel/delete/' . $datas->id_tkernel) ?>"><i class="fas fa-trash" style="color: #f1f2f4;"></i></a>
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
