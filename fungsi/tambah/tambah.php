
<?php 
	require '../../config.php';

	if(!empty($_GET['kategori'])){
		$nama= $_POST['kategori'];
		$tgl= date("j F Y, G:i");
		$data[] = $nama;
		$data[] = $tgl;
		$sql = 'INSERT INTO kategori (nama_kategori,tgl_input) VALUES(?,?)';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index.php?page=kategori&&success=tambah-data"</script>';
	}
	if(!empty($_GET['barang'])){
		$id = $_POST['id'];
		$kategori = $_POST['kategori'];
		$nama = $_POST['nama'];
		$jual = $_POST['jual'];
		$satuan = $_POST['satuan'];
		$stok = $_POST['stok'];
		$tgl = $_POST['tgl'];
		
		$data[] = $id;
		$data[] = $kategori;
		$data[] = $nama;
		$data[] = $jual;
		$data[] = $satuan;
		$data[] = $stok;
		$data[] = $tgl;
		$sql = 'INSERT INTO barang (id_barang,id_kategori,nama_barang,harga_jual,satuan_barang,stok,tgl_input) 
			    VALUES (?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index.php?page=barang&success=tambah-data"</script>';
	}
	
	if(!empty($_GET['customer'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$gender = $_POST['gender'];
		$alamat = $_POST['alamat'];
		$kontak = $_POST['kontak'];
		$tgl = $_POST['tgl'];
		
		$data[] = $id;
		$data[] = $nama;
		$data[] = $gender;
		$data[] = $alamat;
		$data[] = $kontak;
		$data[] = $tgl;
		$sql = 'INSERT INTO customer (id_customer,nama_customer,gender,alamat,kontak,tgl_daftar) 
			    VALUES (?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index.php?page=customer&success=tambah-data"</script>';
	}
	if(!empty($_GET['jual'])){
		$id = $_GET['id'];
		$kasir =  $_GET['id_kasir'];
		$jumlah = '0';
		$total = '0';
		$tgl = date("j F Y, G:i");
		
		$data1[] = $id;
		$data1[] = $kasir;
		$data1[] = $jumlah;
		$data1[] = $total;
		$data1[] = $tgl;
		$sql1 = 'INSERT INTO penjualan (id_barang,id_member,jumlah,total,tanggal_input) VALUES (?,?,?,?,?)';
		$row1 = $config -> prepare($sql1);
		$row1 -> execute($data1);
 		echo '<script>window.location="../../index.php?page=jual&success=tambah-data"</script>';
	}
?>

