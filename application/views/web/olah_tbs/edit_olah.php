<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Olah TBS</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <!-- <a href="<?= base_url('web/data_olah/olah/') ?>" class="btn btn-primary btn-sm">Back</a> -->
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('web/data_olah/olah/update/') ?>"class="user form-horizontal" method="POST">
                        
                        <div class="form-group">
                            <label for="nama_asisten">Nama Asisten</label>
                            <input type="text" class="form-control" name="nama_asisten" value="<?= $data->nama_asisten ?>">
                            <input type="hidden" class="form-control" name="id_olah" value="<?= $data->id_olah ?>">
                        </div>
                        <div class="form-group">
                            <label for="shift">Shift</label>
                            <select class="form-control" name="shift">
                                <option>--Pilih Shift--</option>
                                <?php foreach($shift as $s) : ?>
                                    <option value="<?=$s->id_shift;?>" <?php if ($s->id_shift == $data->shift) echo 'selected' ?>><?=$s->shift;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lori_olah">Lori Olah</label>
                            <input type="text" class="form-control" name="lori_olah" value="<?= $data->lori_olah ?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal ?>">
                            <input type="hidden" class="form-control" name="where" value="<?= $data->id_asisten ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                        <a href="<?= base_url('web/data_olah/olah') ?>" class="btn btn-secondary btn-sm">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
