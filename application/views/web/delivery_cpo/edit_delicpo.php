<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Delivery CPO</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_delicpo/delicpo/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_delicpo/delicpo/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_delicpo">ID Delivery</label>
                            <input type="text" class="form-control" name="id_delicpo"
                                value="<?= $data->id_delicpo ?>">
                            <input type="hidden" name="where" value="<?= $data->id_delicpo ?>">
                        </div>
                        <div class="form-group">
                            <label for="delivery">Delivery</label>
                            <input type="text" class="form-control" name="delivery" value="<?= $data->delivery ?>">
                        </div>
                        <div class="form-group">
                            <label for="via">Via</label>
                            <input type="text" class="form-control" name="via" value="<?= $data->via ?>">
                        </div>
                        <div class="form-group">
                            <label for="do_no">Do_No</label>
                            <input type="text" class="form-control" name="do_no" value="<?= $data->do_no ?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="<?= $data->quantity ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>