 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="letter-spacing: 2px; background: linear-gradient(to top, #071952, black)">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
             <img src="public/img/logo.png" alt="Logo" width="80%">
         </div>
         <div class="sidebar-brand-text mx-3">SMK Tadika Mesra </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="admin.php?page=dashboard">
             <i class="fas fa-tachometer-alt"></i>
             <span class="text-uppercase">Dashboard</span></a>
     </li>

     <hr class="sidebar-divider my-0">

     <li class="nav-item">
         <a class="nav-link" href="admin.php?page=artikel">
             <i class="fas fa-book-open"></i>
             <span class="text-uppercase">Artikel</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="admin.php?page=guru">
             <i class="fas fa-chalkboard-teacher"></i>
             <span class="text-uppercase">Guru</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="admin.php?page=jurusan">
             <i class="fas fa-university"></i>
             <span class="text-uppercase">Jurusan</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="admin.php?page=prestasi">
             <i class="fas fa-trophy"></i>
             <span class="text-uppercase">Prestasi</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="admin.php?page=client">
             <i class="fas fa-pray"></i>
             <span class="text-uppercase">Client</span>
         </a>
     </li>

     <hr class="sidebar-divider my-0">

     <li class="nav-item my-3 d-flex justify-content-center">
         <a class="btn btn-outline-danger text-white" href="/web-sekolah/admin.php?page=logout" onclick="confirm('Anda yakin ingin logout ?')">
             <i class="fas fa-door-open"></i>
             Logout</a>
     </li>

 </ul>
 <!-- End of Sidebar -->