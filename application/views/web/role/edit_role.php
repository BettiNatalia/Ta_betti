<div class="container-fluid">

<!--1. untuk menmapilkan card dimulai dari card header -->
    <div class="card shadow">
        <div class="card-header">Edit Data Role</div>
        <div class="card-body">
            <div class="row">

<!--  2.untuk menampilkan button kembali yang mengambil 3 kolom sebelah kiri -->
            <div class="col-sm-3">
                    <a href="<?= base_url('web/data_role/role/') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>

 <!--  3. data yang akan di input-->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_role/role/update/') ?>"
                        class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="<?= $data->jabatan ?>">
<!-- 4. untuk mengedit data menggunakan 2 buah input, yang menjadi primary key yaitu = id_role -->
                            <input type="hidden" class="form-control" name="id_role" value="<?= $data->id_role ?>">
                        </div>

<!-- 5. untuk membuat buttin simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_role/role') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>