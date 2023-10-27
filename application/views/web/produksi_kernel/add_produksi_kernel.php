<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Produksi Kernel</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('web/data_produksi_kernel/kernel/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_produksi_kernel/kernel/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_produksi">ID Produksi</label>
                            <input type="text" class="form-control" name="id_produksi" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_asisten_pemasaran">ID Asisten Pemasaran</label>
                            <input type="text" class="form-control" name="id_asisten_pemasaran" value="">
                        </div>
                        <div class="form-group">
                            <label for="nama_asisten">Nama Asisten</label>
                            <input type="text" class="form-control" name="nama_asisten" value="">
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" class="form-control" name="ukuran" value="">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" name="stok" value="">
                        </div>
                        <div class="form-group">
                            <label for="kernel_hi">Kernel HI</label>
                            <input type="text" class="form-control" name="kernel_hi" value="">
                        </div>
                        <div class="form-group">
                            <label for="total_kernel">Total Kernel</label>
                            <input type="text" class="form-control" name="total_kernel" value="">
                        </div>
                        <button type="submit" class="btn btn-info btn-sm">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>