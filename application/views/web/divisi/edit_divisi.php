<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Divisi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_divisi/divisi/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_divisi/divisi/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_divisi">ID Divisi</label>
                            <input type="text" class="form-control" name="id_divisi"
                                value="<?= $data->id_divisi ?>">
                            <input type="hidden" name="where" value="<?= $data->id_divisi ?>">
                        </div>
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <input type="text" class="form-control" name="divisi" value="<?= $data->divisi ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>