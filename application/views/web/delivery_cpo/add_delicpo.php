<div class="container-fluid">

<!-- 1. Page Heading -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Delivery CPO</div>
        <div class="card-body">
            <div class="row">
<!-- 2. col-sm-3 telah terisi sehingga kolom selanjutnya melewati 3 kolom -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_delicpo/delicpo/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. col-sm-6 untuk membuat panjang form -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_delicpo/delicpo/create/') ?>"class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                            <label for="delivery">Delivery</label>
                            <input type="text" class="form-control" name="delivery" value="">
                        </div>
                        <div class="form-group">
                            <label for="via">Via</label>
                            <input type="text" class="form-control" name="via" value="">
                        </div>
                        <div class="form-group">
                            <label for="do_no">Do_No</label>
                            <input type="text" class="form-control" name="do_no" value="">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="">
                        </div>
<!-- 4. membuat buttonn simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_delicpo/delicpo') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>