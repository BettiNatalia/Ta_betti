<!-- Topbar -->
<nav class="navbar navbar-expand navbar-primary topbar mb-4 static-top shadow" style="background-color: paleturquoise">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            
    <!-- untuk membuat logo notifikasi -->
    

    <!-- Nav Item - Messages -->
    <!-- untuk menampilkan logo pesan  -->
        <li class="nav-item dropdown no-arrow mx-1">
            
                

        <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          
      <div>        
    <!-- untuk mengganti foto profil -->
    <a class= "bg-cyan dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" href="<?= base_url('Auth/logout/') ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a>
    </div>  

    <!-- Dropdown - User Information -->
    
            
        </li>

    </ul>

</nav>
<!-- End of Topbar -->