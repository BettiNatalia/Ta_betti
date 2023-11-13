<!-- Topbar -->
<nav class="navbar navbar-expand navbar-primary topbar mb-4 static-top shadow" style="background-color: paleturquoise;">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>    
<!-- Sidebar Toggle (Topbar) -->


    <div class="row container-fluid">
    <!-- <img class="mt-2" src="<?= $base_url ?>foto/12.png" style="width: 60px; height: 50px;"> -->
    <!-- <div class="col-12 d-flex align-items-center justify-content-center mt-2" style="color: black">
    <span class="h6 bold-black-text">Sistem Informasi Data Produksi TBS PT. Johan Sentosa</span> -->
        
    <!-- </div> -->
</div>









    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            
    <!-- untuk membuat logo notifikasi -->
    

    <!-- Nav Item - Messages -->
    <!-- untuk menampilkan logo pesan  -->
        <li class="nav-item dropdown no-arrow mx-1">
            
                

        

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small" style="color:black"><?= $this->session->userdata('username') ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= $base_url ?>foto/<?=$this->session->userdata('foto');?> ">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('Auth/logout/') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
        </li>
        </li>

        </ul>
          
      <div>        
    <!-- untuk mengganti foto profil -->
    <!-- <a class= "bg-cyan dropdown-item mt-2" href="#" data-toggle="modal" data-target="#logoutModal" href="<?= base_url('Auth/logout/') ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a> -->
    </div>
</nav>  




    