<div class="container-fluid">
<!-- 1. Page Heading -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Pengguna</div>
        <div class="card-body">
            <div class="row">
<!-- 2. col-sm-3 untuk membuat form yang akan di isi mulai dari kolom ke 3 -->
                <div class="col-sm-3">
                </div>
<!-- 3. col-sm-6 untuk membuat panjang form yaitu col-sm-6 -->
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/create') ?>" class="user form-horizontal" method="POST" enctype="multipart/form-data">
        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>

                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="">
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <div class="form-group">
                            <label for="nama">Aktif</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" id="exampleRadios1" value="Y" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Y
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktif" id="exampleRadios2" value="N">
                                <label class="form-check-label" for="exampleRadios2">
                                    N
                                </label>
                            </div>
                        </div>
<!-- 4. untuk menambahkan data role berdasarkan data role yang sudah di input menggunakan form control -->
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" name="role">
                                <option>--Pilih Role--</option>
                                <?php foreach($role as $r) : ?>
                                    <option value="<?=$r->id_role;?>"><?=$r->jabatan;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
<!-- 5. membuat buttonn simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
