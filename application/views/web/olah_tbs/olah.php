<div class="container-fluid">

    <!-- 1. Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="color: black">
        <h1 class="h3 mb-0 font-weight-bold" style="color: black">Data Olah TBS</h1>
    </div>

    <!-- 2. untuk membuat warna peringatan warna biru -->
    <?php if ($this->session->flashdata('primary')): ?>
        <div class="alert alert-primary" role="alert">
            <?= $this->session->flashdata('primary') ?>
        </div>
    <?php endif ?>

    
    <!-- 3. untuk membuat class baru yaitu data yang di tampilkan dalam tabel -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('web/data_olah/olah/add') ?>" class="btn btn-info btn-sm mb-2">Tambah Data</a>
                <table class="table table-hover table-sm">
    <!-- 4. untuk membuat header atau judul tabel ke samping di beri warna lightcyan -->
                    <thead style="font: size 3px; font-weight: bold; background-color: lightcyan; color: black">
                        <tr>
                            <th>ID Asisten</th>
                            <th>Nama Asisten</th>
                            <th>Shift</th>
                            <th>Lori Olah</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
    <!-- 5. untuk mengelompokkan elemen tabel yaitu isi dari data tabel  -->
                    <tbody>
    <!-- 6. inisialisasi variabel total-->
                    <?php
                    $total = array(
                        'lori_olah' => 0,
                        
                    );
                    ?>
    <!-- 7. membuat perulangan dengan forech  dan tidak perlu menambahkan tag tabel karena masih dalam tag tbody-->
                        <?php foreach ($data as $datas): ?>
                            <tr style="font: size 3px; background-color: aliceblue; color: black">
                                <td><?= $datas->id_asisten ?></td>
                                <td><?= $datas->nama_asisten ?></td>
                                <td><?= $datas->shift ?></td>
                                <td><?= $datas->lori_olah ?></td>
                                <td><?= date('d-m-Y H:i:s', strtotime($datas->tanggal)) ?></td>

    <!-- 8. untuk membuat button edit dan hapus -->
                                <td>
                                    <a href="<?= base_url('web/data_olah/olah/edit/' . $datas->id_asisten) ?>"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <a href="<?= base_url('web/data_olah/olah/delete/' . $datas->id_asisten) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
    <!-- 9. Tambahkan nilai ke total untuk setiap kolom -->
                        <?php
                        $total['lori_olah'] += $datas->lori_olah;
                       
                        ?>
    <!-- 10. tambah kolom baru khusus total dan data yang terisi khusus lori-olah-->
                        <?php endforeach ?>
                        <tr style="background-color: lightcyan; color: black">
                        <td><strong>Total :</strong></td>
                        <td><strong></strong></td>
                            <td><strong></strong></td>
                            <td><strong><?= $total['lori_olah'] ?></strong></td>
                            <td><strong></strong></td>
                            <td><strong></strong></td>
                            
                        </tr>
    <!-- 11. batas dari kolom baru -->
                    </tbody>
                </table>


    <!-- 12 membuat kolom baru untuk menampung nilai akhir total lori olah dan memberi warna pada kolom -->
    <!-- 13. disini menambahkan tabel karena sudah di luar struktur tabel -->
                <table>
                <tr class="btn btn-info btn-sm mb-3" style="background-color: lightcyan; color: black; font-weight: bold; text-align: center">
                            <td><strong>Total Lori : <?= $total['lori_olah'] ?></strong></td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
