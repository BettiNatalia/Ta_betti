<div class="container-fluid">

<!-- 1. Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Delivery CPO</div>
        <div class="card-body">
            <div class="row">
<!-- 2. untuk col-sm-3 untuk membuat konten lain melewati 3 kolom -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_delicpo/delicpo/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. col-sm-6 untuk membuat panjang form -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_delicpo/delicpo/update/') ?>"
                        class="user form-horizontal" method="POST">
                        
<!-- 4. untuk membuat edit kita harus membuat keyword. saat ini keyword yang digunakna yaitu membuat 2 input -->
                        <div class="form-group">
                            <label for="delivery">Delivery</label>
                            <input type="text" class="form-control" name="delivery" value="<?= $data->delivery ?>">
<!-- 5. membuat edit perlu menambahkan 2 input sebagai keyword -->
                            <input type="hidden" class="form-control" name="id_delicpo" value="<?= $data->id_delicpo ?>">
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
                        <a href="<?= base_url('web/data_delicpo/delicpo') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>