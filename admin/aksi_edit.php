<?php 
include 'koneksi.php';
if(isset($_GET['edit'])){
    $get = $_GET['edit'];
    
    if($get == 'data_tag'){
		if(isset($_POST['edit_tag'])){
			$kode = $_POST['kode'];
			$nama = $_POST['nama'];

			$edit = mysqli_query($db, "update tag set id_tag='$kode', nama='$nama' where id_tag='$kode'");
			if($edit){
				echo "<script>alert('Data berhasil diedit!'); document.location.href='kelola_tag.php'</script>";
			}else{
				echo mysqli_error($db);
			}
		}else{
			echo mysqli_error($db);
		}

	}elseif($get == 'data_kategori'){
		if(isset($_POST['edit_kategori'])){
			$kode = $_POST['kode'];
			$nama = $_POST['nama'];

			$edit = mysqli_query($db, "update kategori set id_kategori='$kode', nama='$nama' where id_kategori='$kode'");
			if($edit){
				echo "<script>alert('Data berhasil diedit!'); document.location.href='kelola_kategori.php'</script>";
			}else{
				echo mysqli_error($db);
			}
		}else{
			echo mysqli_error($db);
        }
    }elseif($get == 'data_galeri'){
		if(isset($_POST['edit_galeri'])){
			$id   = $_POST['kode'];
			$judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];
			$gambar_lama = $_POST['gambar_lama'];

			$gambar  = $_FILES['gambar_baru']['name'];
			if(!$gambar){
				$gambar = $gambar_lama;
			}else{
				$gambar  = upload();
				unlink('../galeri/'. $gambar_lama);
				if(!$gambar){
					return error;
				}
			}


			$edit = mysqli_query($db, "UPDATE galeri SET 
				id_galeri     = '$id',
				judul      = '$judul',
				deskripsi 	= '$deskripsi',
				gambar   = '$gambar'
				WHERE id_galeri='$id'");
			if($edit){
				echo "<script>alert('Data berhasil diedit!'); document.location.href='kelola_galeri.php'</script>";
				// echo mysqli_error($koneksi);
			}else{
				echo mysqli_error($db);
			}

		}else{
			echo "<script>alert('Data gagal diedit!'); document.location.href='kelola_galeri.php'</script>";
		}
	}
}


function upload()
{
	$nama_file    = $_FILES['gambar_baru']['name'];
	$tempat 	  = $_FILES['gambar_baru']['tmp_name'];
	$error 		  = $_FILES['gambar_baru']['error'];

	if ($error === 4) {
		echo "<script>

		alert('Silakan pilih gambar terlebih dahulu');

		</script>";
		return false;
	}

	$ektensigambarvalid  = ['jpg', 'png', 'gift', 'jpeg'];
	$ektensigambar       = explode('.', $nama_file);
	$ektensigambar       = strtolower(end($ektensigambar));

	if (!in_array($ektensigambar, $ektensigambarvalid)) {
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
?>

