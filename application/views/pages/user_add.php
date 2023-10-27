<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Pengguna</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('admin/user/') ?>" class="btn btn-primary btn-sm">Kembali</a>
                </div>

                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/create') ?>" class="user form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id_user">ID User</label>
                            <input type="text" class="form-control" name="id_user" value="">
                        </div>
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
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
