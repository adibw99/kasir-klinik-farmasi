<?php 
	require 'config.php';
	include $view;
	$lihat = new view($config);
	$klinik = $lihat -> klinik();
	$hsl = $lihat -> penjualan();
?>
<html>
	<head>
		<title>print</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container-fluid">
			<p><h2><bold><?php echo $klinik['nama_klinik'];?></bold></h2></p>
			<p><?php echo $klinik['alamat_klinik'];?></p>
			<p>-------------------------------------------------------------</p>
			<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
			<p>Kasir : <?php  echo $_GET['nm_member'];?></p>
			<table class="table table-bordered" style="width:20%;font-size:13px;">
				<tr>
					<td>No.</td>
					<td>Barang</td>
					<td>Jumlah</td>
					<td>Total</td>
				</tr>
				<?php $no=1; foreach($hsl as $isi){?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $isi['nama_barang'];?></td>
					<td><?php echo $isi['jumlah'];?></td>
					<td><?php echo $isi['total'];?></td>
				</tr>
				<?php $no++; }?>
			</table>
			<?php $hasil = $lihat -> jumlah(); ?>
			Total : Rp.<?php echo number_format($hasil['bayar']);?>,-
			<p><bold>-------------------------------------------------------------</bold></p>
			Bayar : Rp.<?php echo number_format($_GET['bayar']);?>,-
			<br/>
			Kembali : Rp.<?php echo number_format($_GET['kembali']);?>,-
		</div>
	</body>
</html>
