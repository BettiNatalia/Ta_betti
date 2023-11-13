<div class="container-fluid">

<!-- 1. untuk menambahkan card, dimulai dari tambah data -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Shift</div>
        <div class="card-body">

<!-- 2. untuk membuat button kemabli dengan menggunakan 3 kolom yaitu col-sm-3 -->
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_shift/shift/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. untuk menampilkan tabel edit menggunakan col-sm-6 akan membuat form panjang kesamping -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_shift/shift/create/') ?>"
                        class="user form-horizontal" method="POST">
                        
<!-- 4. gunakan div untuk memisahkn tiap elemen data yang ingin ditambahkan  -->
                        <div class="form-group">
                            <label for="shift">Shift</label>
                            <input type="text" class="form-control" name="shift" value="">
                        </div>
<!-- 5. membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_shift/shift') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>