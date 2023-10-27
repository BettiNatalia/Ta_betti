<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Pemasaran CPO</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_pemcpo/pemcpo/') ?>" class="btn btn-info btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_pemcpo/pemcpo/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_pemasaran">ID Pemasaran</label>
                            <input type="text" class="form-control" name="id_pemasaran" value="">
                        </div>
                        <div class="form-group">
                            <label for="konsumen">Konsumen</label>
                            <input type="text" class="form-control" name="konsumen" value="">
                        </div>
                        <div class="form-group">
                            <label for="via">Via</label>
                            <input type="text" class="form-control" name="via" value="">
                        </div>
                        <div class="form-group">
                            <label for="do_no">Do No</label>
                            <input type="text" class="form-control" name="do_no" value="">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="">
                        </div>
                        <div class="form-group">
                            <label for="pem_hi">HI</label>
                            <input type="text" class="form-control" name="pem_hi" value="">
                        </div>
                        <div class="form-group">
                            <label for="sd_hi">S/D HI</label>
                            <input type="text" class="form-control" name="sd_hi" value="">
                        </div>
                        <div class="form-group">
                            <label for="sisa_do">Sisa Do</label>
                            <input type="text" class="form-control" name="sisa_do" value="">
                        </div>
                        <button type="submit" class="btn btn-info btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>