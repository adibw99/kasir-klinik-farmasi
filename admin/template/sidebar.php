   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="60" height="60"></a></p>
              	  <h5 class="centered"><?php echo $hasil_profil['nm_member'];?></h5>
              	  <h5 class="centered">( <?php echo $hasil_profil['card_id'];?> )</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-large"></i>
                          <span>Master Data <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=customer"> Customer</a></li>
                          <li><a  href="index.php?page=barang">Produk</a></li>
                          <li><a  href="index.php?page=kategori">Kategori</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=jual">Transaksi Jual</a></li>
                          <li><a  href="index.php?page=laporan">Laporan Penjualan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cog"></i>
                          <span>Setting <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a href="index.php?page=pengaturan">Pengaturan Sistem</a></li>
                          <li><a  href="index.php?page=user">User Profil</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
