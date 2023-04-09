 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <div class="bg-shadow" style="background:rgba(0,0,0,0.3);z-index:99999;position:fixed;width:100%;height:6000px;"></div>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Data Customer</h3>
						<?php if(isset($_GET['success-stok'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table>
							<tr>
								<td><button id="tombol-simpan" onclick="clickModals()" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button></td>
							</tr>
						</table>
						<br/>
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered" id="example1">
								<thead>
									<tr style="background:#DFF0D8;color:#333;">
										<td>No.</td>
										<td>ID Customer</td>
										<td>Nama</td>
										<td>Jenis Kelamin</td>
										<td>Alamat</td>
										<td>Kontak</td>
										<td>Tgl Daftar</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
								<?php 
									$hasil = $lihat -> customer();
									$no=1;
									foreach($hasil as $isi){
								?>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $isi['id_customer'];?></td>
										<td><?php echo $isi['nama_customer'];?></td>
										<td><?php echo $isi['gender'];?></td>
										<td> <?php echo $isi['alamat'];?></td>
										<td> <?php echo $isi['kontak'];?></td>
										<td> <?php echo $isi['tgl_daftar'];?></td>	
										<td>
											<a href="index.php?page=customer/edit&customer=<?php echo $isi['id_customer'];?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
											<a href="fungsi/hapus/hapus.php?customer=hapus&id=<?php echo $isi['id_customer'];?>" onclick="javascript:return confirm('Hapus Data customer ?');"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
										</td>
									</tr>
								<?php $no++; }?>
								</tbody>
							</table>
							<div class="clearfix" style="padding-top:27%;"></div>
						</div>
					<!-- end view barang -->
					<!-- tambah barang MODALS-->
					<div class="modal-create" style="z-index:9999999;position:absolute;margin:0 auto;padding:0;top:0;width:85%;">
						<div class="panel panel-default" style="border:0px;">
							<div class="panel-heading">
								<h4><i class="fa fa-user-plus"></i>  Tambah Customer
									<a class="pull-right">
										<button type="submit" class="btn btn-danger" onclick="cancelModals()" id="batal">Batal</button>
									</a>
								</h4>
							</div>
							<div class="panel-body">
								<div class="box-content">
									<table class="table table-striped bordered">
										<form action="fungsi/tambah/tambah.php?customer=tambah" method="POST">
											
											<?php
												$format = $lihat -> customer_id();
											?>
											<tr>
												<td>ID Customer</td>
												<td><input type="text" readonly="readonly" value="<?php echo $format;?>" class="form-control"  name="id"></td>
											</tr>
											<tr>
												<td>Nama Lengkap</td>
												<td><input type="text" placeholder="Nama lengkap" class="form-control" name="nama"></td>
											</tr>
											<tr>
												<td>Jenis Kelamin</td>
												<td>
													<select name="gender" class="form-control">
														<option value="#">Pilih Jenis Kelamin</option>
														<option value="laki-laki">Laki - Laki</option>
														<option value="perempuan">Perempuan</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Alamat</td>
												<td><input type="text" Placeholder="Alamat" class="form-control"  name="alamat"></td>
											</tr>
											<tr>
												<td>kontak</td>
												<td><input type="number" placeholder="Nomer HP" class="form-control"  name="kontak"></td>
											</tr>
											<tr>
												<td>Tanggal Daftar</td>
												<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
											</tr>
											<tr>
												<td></td>
												<td><button class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button></td>
											</tr>
										</form>
									</table>
								</div>
							</div>
						<!-- end tambah barang -->
					</div>
				  </div>
              </div>
          </section>
      </section>
	
