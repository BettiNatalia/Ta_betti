<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Supplier</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_suplier/suplier/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_suplier/suplier/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_suplier">ID Suplier</label>
                            <input type="text" class="form-control" name="id_suplier" value="">
                        </div>
                        <div class="form-group">
                            <label for="suplier">suplier</label>
                            <input type="text" class="form-control" name="suplier" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>