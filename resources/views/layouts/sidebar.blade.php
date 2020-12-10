<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="form-group col-md-4" align="center">
          
        </div>
        <div class="info">
          <a class="d-block">Menu</a>
        </div>
      </div>

  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul id="" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/pengguna" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
               Pengguna
                
              </p>
            </a>
         
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Penduduk
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="/admin/tampil" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Data Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kk" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Data Keluarga</p>
                </a>
              </li>
             
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
              <p>
               Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/buatsurat" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Buat Surat</p>
                </a>
              </li>

                         
              <li class="nav-item">
                <a href="/admin/datasurat" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Data Surat</p>
                </a>
              </li>
            </ul>
          </li>
       
         <!-- <li class="nav-item has-treeview">
            <a href="/admin/dj" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
              <p>
               Bantuan
               
              </p>
            </a>
         
          </li>-->
       </nav>
      <!-- /.sidebar-menu -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>