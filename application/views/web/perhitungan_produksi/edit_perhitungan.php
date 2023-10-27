<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Pemasaran Kernel</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_hitung/hitung/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_hitung/hitung/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="budget">Budget Pengolahan</label>
                            <input type="text" class="form-control" name="budget"
                                value="<?= $data->budget ?>">
                            <input type="hidden" name="where" value="<?= $data->budget ?>">
                        </div>
                        <div class="form-group">
                            <label for="tbs_awal">TBS Awal</label>
                            <input type="text" class="form-control" name="tbs_awal" value="<?= $data->tbs_awal ?>">
                        </div>
                        <div class="form-group">
                            <label for="via">Via</label>
                            <input type="text" class="form-control" name="via" value="<?= $data->via ?>">
                        </div>
                        <div class="form-group">
                            <label for="do_no">Do No</label>
                            <input type="text" class="form-control" name="do_no" value="<?= $data->do_no ?>">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="<?= $data->quantity ?>">
                        </div>
                        <div class="form-group">
                            <label for="pem_hi">HI</label>
                            <input type="text" class="form-control" name="pem_hi" value="<?= $data->pem_hi ?>">
                        </div>
                        <div class="form-group">
                            <label for="sd_hi">S/D HI</label>
                            <input type="text" class="form-control" name="sd_hi" value="<?= $data->sd_hi ?>">
                        </div>
                        <div class="form-group">
                            <label for="sisa_do">Sisa Do</label>
                            <input type="text" class="form-control" name="sisa_do" value="<?= $data->sisa_do ?>">
                        </div>
                        <button type="submit" class="btn btn-info btn-sm">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>