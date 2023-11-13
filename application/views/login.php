<?php $base_url = base_url() . 'assets/'; ?>
    <!-- http://nama-domain/assets/ -->
    <!-- $base_url -> nama variabel untuk menampung home dir assets -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIDPTBS_JOHAN</title>

    <!-- Pastikan telah menyertakan Font Awesome yang benar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Custom fonts for this template-->
    <link href="<?= $base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="<?= $base_url ?>css/sb-admin-2.min.css" rel="stylesheet">
    
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- untuk mengubah logo pencarian di google menjadi logo polkam -->
    <link rel="icon" href="logopolkam.png"
        type="jpg/png">

        <style>
    body {
        background-image: url('<?= base_url('assets/image/bg2.jpg') ?>');
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100vh;
        margin: 0; /* Menghapus margin default */
        padding: 0; /* Menghapus padding default */
    }
</style>

</head>
      
<body>

    <!-- 6. untuk membuat container login -->
    <div class="container col-xxl-6 col-sm-12 mt-0 mb-0" style="padding-top: 120px;">

    <!-- 7. Outer Row -->
        <div class="row justify-content-center">

    <!-- 8. col xl untuk mengubah ukuran tampilan login yang bewarna putih -->
            <div class="col-xl-7 col-lg-12 col-md-9">

    <!-- 9. my-5 mengatur jarak dari atas container -->
                <div class="card o-hidden border-15 shadow-lg my-5">
                

    <!-- 10. Nested Row within Card Body -->
                    <div class="card-body p-0">
                        <div class="row">

    <!-- 11. untuk mengatur panjang kolom usernama dan password -->
                            <div class="mb-3">

    <!-- 12. p-5 untuk mengatur jarak tulisann welcome back dari tepi atas container -->
                                <div class="p-3">
                                    <div class="text-center">
                                    <img src="<?= base_url('assets/image/12.png') ?>" alt="" class="" style="width: 100px; height: 100px;">
                                    <h4 class="mb-2" style="text-align: center;">Selamat Datang Di SIPTBS</h4>
                                        <p class="mb-4 font-weight-bold" style="text-align: center;">PT. JOHAN SENTOSA</p>
                                        <?php if($this->session->flashdata('error')) :?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= $this->session->flashdata('error')?>
                                            </div>
                                            <?php endif ?>
                                        </div>

                                    <form class="user" action="<?= base_url('auth/checklogin') ?>" method="POST">
                                        <div class="mb-3">
                                        <label for="email" class="form-label">Email / Username</label>
                                        <input type="text"required class="form-control" id="email" name="email" placeholder="Masukkan Email / Username"/>
                                        </div>

                                        <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                        <input type="password" required class="form-control" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                            
                                        <div class="input-group-append">
                                                <button type="button" class="btn btn-light" id="togglePassword">
                                                <i class="fas fa-eye-slash"></i>
                                                </button>
                                        </div>
                                        </div>
                                        </div>

                                <script>
                                document.getElementById("togglePassword").addEventListener("click", function() {
                                const passwordField = document.getElementById("password");
                                const eyeIcon = this.querySelector("i");
                                    if (passwordField.type === "password") {
                                        passwordField.type = "text";
                                        eyeIcon.classList.remove("fa-eye-slash");
                                        eyeIcon.classList.add("fa-eye");
                                    } else {
                                        passwordField.type = "password";
                                        eyeIcon.classList.remove("fa-eye");
                                        eyeIcon.classList.add("fa-eye-slash");
                                    }
                                });
                            </script>
                                        
                                        <div>
                                        <button class="btn btn-white d-grid w-100" type="submit" style="background-color: lightblue">Login</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <footer id="footer">
    
    <div>
        <div class="mt-2 text-center">
            <div class="copyright">
                Copyright @ <strong><span>TIF POLKAM 2023</span></strong> By Betti
            </div>
        </div>
    </div>
</footer>
    

    <!-- Bootstrap core JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= $base_url ?>js/sb-admin-2.min.js"></script>

</body>

</html>