<div class="container-fluid">

<!-- 1. Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Delivery Kernel</div>
        <div class="card-body">
            <div class="row">
<!-- 2. untuk col-sm-3 sudah terisi sehingga konten lain harus melwati 3 kolom -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_delikernel/delikernel/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. untuk col-sm-6 untuk membuat panjang form yaitu 6 -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_delikernel/delikernel/update/') ?>"
                        class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                            <label for="delivery">Delivery</label>
                            <input type="text" class="form-control" name="delivery" value="<?= $data->delivery ?>">
<!-- 4.tambahkan input baru sebagai keyword yaitu id_delivery dan text di hidden agar tidak muncul teks id_delivery -->
<!-- 5. untuk membuat value keyword input gunakan id yang sama pada paramater button edit di view -->
                            <input type="hidden" class="form-control" name="id_delikernel" value="<?= $data->id_delikernel ?>">
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
<!-- 6. untuk membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_delikernel/delikernel') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>