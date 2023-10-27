<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Produksi Kernel</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_produksi_kerel/kernel/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_produksi_kernel/kernel/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_produksi">ID Produksi</label>
                            <input type="text" class="form-control" name="id_produksi"
                                value="<?= $data->id_produksi ?>">
                            <input type="hidden" name="where" value="<?= $data->id_produksi ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_asisten_pemasaran">ID Asisten Pemasaran</label>
                            <input type="text" class="form-control" name="id_asisten_pemasaran value="<?= $data->id_asisten_pemasaran ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_asisten">Nama Asisten</label>
                            <input type="text" class="form-control" name="nama_asisten" value="<?= $data->nama_asisten ?>">
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" class="form-control" name="ukuran" value="<?= $data->ukuran ?>">
                        </div>
                        <div class="form-group">
                            <label for="kernel_hi">Kernel HI</label>
                            <input type="text" class="form-control" name="kernel_hi" value="<?= $data->kernel_hi ?>">
                        </div>
                        <div class="form-group">
                            <label for="total_kernel">Total Kernel</label>
                            <input type="text" class="form-control" name="total_kernel" value="<?= $data->total_kernel ?>">
                        </div>
                        <div class="form-group">
                            <label for="total_kernel">Total CPO</label>
                            <input type="text" class="form-control" name="total_kernel" value="<?= $data->total_kernel ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>