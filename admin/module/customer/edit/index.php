 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <?php 
	$id = $_GET['customer'];
	$hasil = $lihat -> customer_edit($id);
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
					  	<a href="index.php?page=customer"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
						<h3>Edit Customer</h3>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-striped">
							<form action="fungsi/edit/edit.php?customer=edit" method="POST">
								<tr>
									<td>ID Product</td>
									<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_customer'];?>" name="id"></td>
								</tr>
								<tr>
												<td>Nama Lengkap</td>
												<td><input type="text" value="<?php echo $hasil['nama_customer'];?>" class="form-control" name="nama"></td>
											</tr>
											<tr>
												<td>Jenis Kelamin</td>
												<td>
													<select name="gender" class="form-control">
													<option value="<?php echo $hasil['gender'];?>"><?php echo $hasil['gender'];?></option>
														<option value="#">Pilih Jenis Kelamin</option>
														<option value="laki-laki">Laki - Laki</option>
														<option value="perempuan">Perempuan</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Alamat</td>
												<td><input type="text" value="<?php echo $hasil['alamat'];?>" class="form-control"  name="alamat"></td>
											</tr>
											<tr>
												<td>kontak</td>
												<td><input type="number" value="<?php echo $hasil['kontak'];?>" class="form-control"  name="kontak"></td>
											</tr>
								<tr>
									<td>Tanggal Daftar</td>
									<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
								</tr>
								<tr>
									<td></td>
									<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
								</tr>
							</form>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
