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


<!-- 2. untuk membuat data user -->
	<div>
        <h1 class="h3 mb-3 font-weight-bold" style="color: black">Data User</h1>
    </div>


<!-- 3. untuk membuat card header -->
    <div class="row">
        <div class="card col-12">
<!-- 3a. untuk membuat button tambah data dimana berada pada card header & untuk membuat print di ujung tambahkan beetwen &justify-content untuk membuat horizontal atau sejajar-->
    <div class="mt-3 mb-0 ">
        <a href="<?= base_url('admin/user/add'); ?>" class=" btn btn-sm shadow-sm" style="color: black; float: left; background-color: lightcyan"><i class="fas fa-plus"></i>Tambah Data</a>
<!-- 3b. untuk membuat tampilan tulisan besar ketik di bagian i namun jika tidak mau tulisan besar maka letakkan setelah i -->
        <!-- <a href="<?php echo base_url('admin/user/print'); ?>" class=" btn-sm" style="color: black; background-color: lightcyan;"> <i class="fa fa-print"></i>Print</a> -->
    </div>


<!-- 4. untuk membuat konten bagian isi card body dan tag hr membuat garis lurus   -->
    <hr style="color: black; border-style: solid; border-width: 1px;">


<!-- 5. untuk membuat tabel user dan tabel button tambah data menyatu -->
    <div class="col">
        <div class="row">
            
        
<!-- 6. Teks "Search:" dan kotak pencarian -->
    <div class="col-md-3 col-12 d-flex align-items-center">
        <span>Search: </span>
<!-- 6a. untuk membuat tanda silang dikolom pencarian gunakan type= search -->
        <input type="search" id="searchInput" class="form-control form-control-sm" placeholder="Cari Pengguna" name="keyword" autocomplete="off" autofocus>
    </div>
    

<!-- 7. Penambahan elemen Show dan Entries yang membuat show entires disebela kanan paling ujung dan harus menggunakan col-12 -->
    <div class="col-md-9 col-12 d-flex align-items-center justify-content-end">
    <div class="dataTables_length" id="dataTable_length">
    <label class="d-flex align-items-center">
                    Show 
                    <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    Entries
                </label>
            </div>
        </div>
    </div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
            <tr>
                <th>#<i class="fas fa-sort"></i></th>
                <th>Nama <i class="fas fa-sort"></i></th>
                <th>Email <i class="fas fa-sort"></i></th>
                <th>Level <i class="fas fa-sort"></i></th>
                <th>Aktif <i class="fas fa-sort"></i></th>
<!-- 8a. untuk menyatukan header kolom gunakan colspan 3 -->
                <th colspan="3" style="text-align: center;">Aksi</th>
            </tr>

<!--  9. untuk membuat isi dari data tabel di database-->
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $datas) : ?>
                <!-- data adalah objek dan datas adalah variabel -->
                <tr style="font-size: 13px; color: black">
                <td><?= $i ?></td>
                <td><?= $datas->nama ?></td>
                <td><?= $datas->email ?></td>
                <td><?= $datas->jabatan ?></td>
                <td style="width : 70px;"><?= $datas->aktif ?></td>


<!--10. untuk membuat aksi di tabel user  -->
                <td style="width : 50px;">
                    <a href="<?= base_url('admin/user/detail/' . $datas->id_user) ?>" class="btn-sm bg-gray-400"><i class="fa fa-search-plus"></i></a>
                </td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Edit')" style="width : 50px;">
                    <a href="<?= base_url('admin/user/edit/' . $datas->email) ?>" class="btn-sm bg-gray-400"><i class="fa fa-edit"></i></a>
                </td>
                <td onclick="javascript: return confirm('Anda Yakin Ingin Hapus')" style="width : 50px;">
                    <a href="<?= base_url('admin/user/delete/' . $datas->email) ?>" class=" btn-sm bg-gray-400"><i class="fas fa-trash"></i></a>
                </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>  
</div>







