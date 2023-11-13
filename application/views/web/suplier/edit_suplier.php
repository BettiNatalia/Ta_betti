<div class="container-fluid">

<!-- 1. Page Heading -->
    <div class="card shadow">
        <div class="card-header">Edit Data Suplier</div>
        <div class="card-body">
            <div class="row">
<!-- 2. col-sm-3 telah diisi back namun sudah di komentari sehinggal kolom -3 sudah di isi -->
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_suplier/suplier/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
<!-- 3. untuk membuat panjang form yaitu col-sm-6 -->
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_suplier/suplier/update/') ?>"
                        class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                            <label for="suplier">Suplier</label>
                            <input type="text" class="form-control" name="suplier" value="<?= $data->suplier ?>">
<!-- 4. tambahkan input satu lagi untuk keyword edit yaitu id_suplier dan text hidden akan tidak ditampilkan -->
<!-- untuk edit selalu menambahkan input 1 lagi agar sistem mengerti yang menjadi keyword data dan id_suplier adalah parameter di button edit view -->
                            <input type="hidden" class="form-control" name="id_suplier" value="<?= $data->id_suplier ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('web/data_suplier/suplier') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>