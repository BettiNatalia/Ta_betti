<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="card shadow">
        <div class="card-header">Form Edit User</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('admin/user') ?>" class="btn btn-primary btn-sm">Kembali</a>
                </div>

                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/update') ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?=$data->email?>">
                            <input type="hidden" name="where" value="<?=$data->email?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?=$data->nama?>">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class a="form-control" name="telepon" value="<?=$data->telepon?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto">
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
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
