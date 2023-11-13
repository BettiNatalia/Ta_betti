<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">Form Edit Data TBS Luar</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_luar/luar') ?>" class="btn btn-primary btn-sm">Kembali</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_luar/luar/update/') ?>" class="user form-horizontal" method="POST">
                    <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal ?>">
                            <input type="hidden" class="form-control" name="id_tanggal" value="<?= $data->id_tanggal ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
