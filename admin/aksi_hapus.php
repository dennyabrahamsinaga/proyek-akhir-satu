<?php
include 'koneksi.php';
if(isset($_GET['hapus'])){
    $get  = $_GET['hapus'];

    if($get == 'data_tag'){
		$id = $_GET['id'];
        $delete = mysqli_query($db, "DELETE FROM tag WHERE id_tag='$id'");
		if($delete){
			header('location: kelola_tag.php');
		}else{
			echo mysqli_error($db);
        }
    }elseif($get == 'data_kategori'){
		$id = $_GET['id'];
        $delete = mysqli_query($db, "DELETE FROM kategori WHERE id_kategori='$id'");
		if($delete){
			header('location: kelola_kategori.php');
		}else{
			echo mysqli_error($db);
        }
    }elseif($get == 'data_galeri'){
        $id = $_GET['id'];
        $delete = mysqli_query($db, "DELETE FROM galeri WHERE id_galeri='$id'");
        if ($delete) {
            header('location: kelola_galeri.php');
        } else {
            echo mysqli_error($db);
        }
    }elseif($get == 'data_berita'){
        $id = $_GET['id'];
        $delete = mysqli_query($db, "DELETE FROM berita WHERE id_berita=$id");
        if ($delete) {
            header('location: kelola_berita.php');
        } else {
            echo mysqli_error($db);
        }
    }
}
?>