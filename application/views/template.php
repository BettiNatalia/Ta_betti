<!-- 1. isi file ini yang mengatur seluruh isi halaman web yaitu header, footer -->

<?php $base_url = base_url() . 'assets/' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIDPTBS_JOHAN</title>


    <!-- Sertakan stylesheet Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- 2. Start of file stylesheet.php -->
    <?php include_once "template/stylesheet.php" ?>
    <!-- End of file stylesheet.php -->

    <!-- 3. untuk mengubah logo pencarian di google menjadi logo polkam -->
    <link rel="icon" href="logopolkam.png"
        type="jpg/png">

    <style>
        .bg-login-image {
            background: url(<?= $base_url ?>img/logo.jpg);
            background-position: center;
            background-size: cover;
        }

        .sidebar-divider {
            margin: 10px 0; /* Atur jarak atas dan bawah sesuai keinginan Anda */
            border: 1px solid #fff; /* Warna dan ketebalan garis pemisah */
        }

        .bg-cyan {
  background-color: cyan;
        }
    </style>

    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once "template/sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once "template/header.php" ?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <?php $this->load->view($pages) ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- 4. Footer -->
            <footer class="sticky-footer" style="color: black; background-color: paleturquoise">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; TIF Polkam 2023 By Betti Natalia Nahampun</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- 5. Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- 6. Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Pilih 'Logout' di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url() ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Start file of javascript.php -->
    <?php include_once "template/javascript.php" ?>
    <!-- End file of javascript.php -->

</body>

</html>