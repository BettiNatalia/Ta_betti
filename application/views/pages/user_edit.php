<div class="container-fluid">

<!-- Page Heading -->
<!-- 1. untuk menampilkan teks data user -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
    </div>

<!-- 2. untuk menampilkan card header yang menampilkan teks form edit user -->
    <div class="card shadow">
        <div class="card-header">Form Edit User</div>
        <div class="card-body">
            <div class="row">
<!-- 3. untuk menampilkan form dimulai dari col ke-3 dalam satu baris -->
                <div class="col-sm-3">

                </div>

<!-- 4. untuk menampilkan data edit sesuai ukuran col-sm-3 akan menjadi ukuran kecil -->
                <div class="col-sm-9">
                    <form action="<?= base_url('admin/user/update') ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?=$data->email?>">
<!-- 4. untuk mengedit dan update data berdasarkan primery key yaitu id_user karena button edit menyimpan parameter email -->
                            <input type="hidden" name="where" value="<?=$data->id_user?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?=$data->nama?>">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class ="form-control" name="telepon" value="<?=$data->telepon?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label><br>
                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $data->foto; ?>" width="90" height="100"><br>
                            <input type="file" class="form-control" name="foto" value="<?=$data->foto?>">
                        </div>
                        <div class="form-group">
                            <label for="aktif">Aktif</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" id="exampleRadios1" value="Y" <?= ($data->aktif == 'Y' ? 'checked':'') ?>>
                                <label class="form-check-label" for="exampleRadios1">
                                    Y
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" id="exampleRadios2" value="N" <?= ($data->aktif == 'N' ? 'checked':'') ?>>
                                <label class="form-check-label" for="exampleRadios2">
                                    N
                                </label>
                            </div>
                        </div>
<!-- 5. untuk ngambil data dari data role atau data dropdown -->
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" name="role">
                                <option>--Pilih Role--</option>
                                <?php foreach($role as $r) : ?>
                                    <option value="<?=$r->id_role;?>" <?php if ($r->id_role == $data->role_id) echo 'selected' ?>><?=$r->jabatan;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
<!-- 6. untuk membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
