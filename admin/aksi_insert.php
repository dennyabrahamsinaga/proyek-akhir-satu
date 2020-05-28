<?php 
include 'koneksi.php';
if(isset($_GET['tambah'])){
    $get = $_GET['tambah'];
    
    if($get == 'data_tag'){
		if(isset($_POST['tambah_tag'])){
			$kode = $_POST['id_tag'];
			$nama = $_POST['nama'];
			

			$insert = mysqli_query($db,"INSERT INTO tag VALUES('$kode','$nama')");
			if($insert){
				echo "<script>alert('Data berhasil ditambahkan!'); document.location.href='kelola_tag.php'</script>";
			}else{
				echo "<script>alert('Data gagal ditambahkan!'); document.location.href='kelola_tag.php'</script>";
			}
		}else{
			echo "<script>alert('Data gagal ditambahkan!'); document.location.href='kelola_tag.php'</script>";
		}
    }elseif($get == 'data_kategori'){
		if(isset($_POST['tambah_kategori'])){
			$kode = $_POST['id_kategori'];
			$nama = $_POST['nama'];
			

			$insert = mysqli_query($db,"INSERT INTO kategori VALUES('$kode','$nama')");
			if($insert){
				echo "<script>alert('Data berhasil ditambahkan!'); document.location.href='kelola_kategori.php'</script>";
			}else{
				echo "<script>alert('Data gagal ditambahkan!'); document.location.href='kelola_kategori.php'</script>";
			}
		}else{
			echo "<script>alert('Data gagal ditambahkan!'); document.location.href='kelola_kategori.php'</script>";
		}
	}elseif($get == 'data_galeri'){
		if(isset($_POST['tambah_galeri'])){
			$kode = $_POST['id_galeri'];
			$judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];

			$foto  = upload();

			if(!$foto){
				return false;
			}

			$insert = mysqli_query($db, "INSERT INTO galeri VALUES('$kode','$judul','$deskripsi','$foto')");

			if($insert){
				echo "<script>alert('Data berhasil ditambahkan!'); document.location.href='kelola_galeri.php'</script>";
			}else{
				echo "<script>alert('Data gagal ditambahkan!'); document.location.href='kelola_galeri.php'</script>";
			}

		}else{
			echo "<script>alert('Data gagal ditambahkan!'); document.location.href='kelola_galeri.php'</script>";
		}
}


	function upload(){
		$nama_file    = $_FILES['gambar']['name'];
		$tempat 	  = $_FILES['gambar']['tmp_name'];
		$error 		  = $_FILES['gambar']['error'];
	
		if($error === 4){
			echo "<script>
		
			alert('Silakan pilih gambar terlebih dahulu');
		
			</script>";
			return false;
		}
	
		$ektensigambarvalid  = ['jpg','png','gift','jpeg'];
		$ektensigambar       = explode('.', $nama_file);
		$ektensigambar       = strtolower(end($ektensigambar));
	
		if(!in_array($ektensigambar, $ektensigambarvalid)){
			echo "<script>
		
			alert('Ektensi gambar Anda tidak dapat digunakan!');
		
			</script>";
			return false;
		}
	
		$ektensifilebaru  =  uniqid();
		$ektensifilebaru .=  '.';
		$ektensifilebaru .=  $ektensigambar;
	
	
	
		move_uploaded_file($tempat, '../galeri/' . $ektensifilebaru);
	
		return $ektensifilebaru;
	}
}