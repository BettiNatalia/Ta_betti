<div class="container-fluid">

<!-- 1. untuk menambahkan card, dimulai dari tambah data -->
    <div class="card shadow">
        <div class="card-header">Tambah Data Suhu</div>
        <div class="card-body">

<!-- 2. untuk membuat button kemabli dengan menggunakan 3 kolom yaitu col-sm-3 -->
            <div class="row">
                <div class="col-sm-3">
    <!-- sudah dikomentari -->
                    <!-- <a href="<?= base_url('web/data_shift/shift/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. untuk menampilkan tabel edit menggunakan col-sm-6 akan membuat form panjang kesamping -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_suhu/suhu/create/') ?>"
                        class="user form-horizontal" method="POST">
                        
<!-- 4. gunakan div untuk memisahkn tiap elemen data yang ingin ditambahkan  -->
                        <div class="form-group">
                            <label for="suhu">Suhu</label>
                            <input type="text" class="form-control" name="suhu" value="">
                        </div>

                        <div class="form-group">
                            <label for="BJ">BJ Terhadap Suhu</label>
                            <input type="text" class="form-control" name="BJ" value="">
                        </div>
<!-- 5. membuat button simpan dan close -->
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_suhu/suhu') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>