<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data TBS Luar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    @media print {
        table {
            border: none;
            font-size: 12px;
        }
        .no-print {
            display: none;
        }
    }
</style>

</head>
<body> 
    <div class="container-fluid mt-5">
        <!-- 1. dimulai dari button kembali -->
    <button class="btn btn-primary btn-sm no-print my-3" onclick="window.history.back()">Kembali</button>
    <!-- 2. membuat data tabel inti yang akan diprint -->
        <table id="yourTableID" class="table table-bordered table table-striped table-hover">
            <!-- struktur penulisan tabel yaituu table, thead, tbody,  -->
                        <thead style="font-size: 13px; font-weight: bold; color: black">
                            <tr>
                                <!-- terdapat th yang merupakan header tabel baris pertama -->
                                <th>ID Inti <i class="fas fa-sort"></i></th>
                                <th>Divisi <i class="fas fa-sort"></i></th>
                                <th>Janjang <i class="fas fa-sort"></i></th>
                                <th>Tonase <i class="fas fa-sort"></i></th>
                                <th>BJR <i class="fas fa-sort"></i></th>
                            </tr>
                        </thead>
                        <!-- masuk kestruktur kedua tbody isi dari data tabel -->
                        <tbody>
                            <?php
                            $total = array(
                                'janjang' => 0,
                                'tonase' => 0,
                                'BJR' => 0,
                                'tonase_total' => 0,
                            );
                            ?>
                            <!-- untuk membuat id otomatis lanjut terus -->
                            <?php $i = 1; ?>
                            <!-- membuat foreach untuk perulangan isi tabel dan data adalah variabel -->
                            <?php foreach ($data as $datas): ?>
                                <tr style="font-size: 13px; color: black">
                                    <td><?= $i ?></td>
                                    <td><?= $datas->divisi ?></td>
                                    <td><?= $datas->janjang ?></td>
                                    <td><?= $datas->tonase ?></td>
                                    <td><?= $datas->BJR ?></td>
                                </tr>

                                <!-- untuk membuat rumus masing-masing total dari data tabel inti langsung ajh dibuat sesuai kebutuhan-->
                                <?php
                                $total['janjang'] += $datas->janjang;
                                $total['tonase'] += $datas->tonase;
                                $total['BJR'] += $datas->BJR;
                                $total['tonase_total'] += $datas->tonase;
                                $i++;
                                // i++ untuk membuat id otomatis membuat perubahan id
                                ?>
                            <?php endforeach ?>
                            <!-- untuk menampilkan total dari masing-masing tabel data inti berdasarkan rumus perhitungan di atas -->
                            <tr style="color: black;">
                            
                                <td><strong>Total:</strong></td>
                                <td><strong></strong></td>
                                <td><strong><?= $total['janjang'] ?></strong></td>
                                <td><strong><?= $total['tonase'] ?></strong></td>
                                <td><strong><?= $total['BJR'] ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
            <!-- div container-fluid -->
                </div>

    <script type="text/javascript">
        // Memicu pencetakan saat halaman dimuat
        window.print();
    </script>
</body>
</html>
