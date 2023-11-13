<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data User</title>
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
        <button class="btn btn-primary btn-sm no-print my-3" onclick="window.history.back()">Kembali</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data as $datas) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $datas->nama ?></td>
                        <td><?= $datas->email ?></td>
                        <td><?= $datas->telepon ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        // Memicu pencetakan saat halaman dimuat
        window.print();
    </script>
</body>
</html>
