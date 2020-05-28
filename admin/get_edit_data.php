<?php 
include 'koneksi.php';

if(isset($_GET['dapat'])){
	$get  = $_GET['dapat'];

	if($get == 'data_tag') {

		$id  = $_POST['id'];

		$get = mysqli_query($db, "SELECT * FROM tag WHERE id_tag='$id'");
		$data = mysqli_fetch_array($get);

		echo json_encode($data);
	}elseif($get == 'data_kategori') {

		$id  = $_POST['id'];

		$get = mysqli_query($db, "SELECT * FROM kategori WHERE id_kategori='$id'");
		$data = mysqli_fetch_array($get);

		echo json_encode($data);
	}elseif($get == 'data_galeri'){
		$id  = $_POST['id'];
		
		$get = mysqli_query($db, "SELECT * FROM galeri WHERE id_galeri='$id'");
		$data = mysqli_fetch_array($get);

		echo json_encode($data);
	}
	
}
?>