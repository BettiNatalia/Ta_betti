<div class="container-fluid">

<!--1.  Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Divisi</div>
        <div class="card-body">
            <div class="row">
<!-- 2. untuk col-sm-3 menyimpan button yang telah dikomentari yaitu back sehingga form edit setelah kol-3 -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_divisi/divisi/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>

<!-- 3. untuk membuat panjang form yaitu 6 -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_divisi/divisi/update/') ?>"class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <input type="text" class="form-control" name="divisi" value="<?= $data->divisi ?>">
<!-- 4. untuk melakukan edit pastikan telah membuat input 2 lagi agar paramater button edit di view terhubung -->
                            <input type="hidden" class="form-control" name="id_divisi" value="<?= $data->id_divisi ?>">
                        </div>

<!-- 6. untuk membuat button simpan dan close -->
                       <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_divisi/divisi') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>