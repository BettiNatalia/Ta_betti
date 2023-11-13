<div class="container-fluid">

<!--1.  Page Heading -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Supplier</div>
        <div class="card-body">
            <div class="row">
<!-- 2. untuk membuat button back namun sudah dikomentari sehingga untuk saat ini col-sm-3 sudah terisi -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_suplier/suplier/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. untuk membuat panjang form yaitu 6 -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_suplier/suplier/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="suplier">suplier</label>
                            <input type="text" class="form-control" name="suplier" value="">
                        </div>
<!-- 4. untuk membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_suplier/suplier') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>