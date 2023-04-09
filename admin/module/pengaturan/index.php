 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Pengaturan</h3>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
								<tr>
									<td>Nama Klinik</td>
									<td>Alamat Klinik</td>
									<td>Kontak (Hp)</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">		
								<tr>
									<td><input class="form-control" name="namaklinik" value="<?php echo $klinik['nama_klinik'];?>" placeholder="Nama Klinik"></td>
									<td><input class="form-control" name="alamat" value="<?php echo $klinik['alamat_klinik'];?>" placeholder="Alamat Klinik"></td>
									<td><input class="form-control" name="kontak" value="<?php echo $klinik['tlp'];?>" placeholder="Kontak (Hp)"></td>
									<td><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
								</tr>
								</form>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
