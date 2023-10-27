<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Suplier</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_suplier/suplier/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_suplier/suplier/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_suplier">ID Supplier</label>
                            <input type="text" class="form-control" name="id_suplier"
                                value="<?= $data->id_suplier ?>">
                            <input type="hidden" name="where" value="<?= $data->id_suplier ?>">
                        </div>
                        <div class="form-group">
                            <label for="suplier">Suplier</label>
                            <input type="text" class="form-control" name="suplier" value="<?= $data->suplier ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>