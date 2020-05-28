<?php
include "koneksi.php";
include 'template/header.php';
include 'template/topbar.php';
?>

<style>
    table .aksi {
        display: flex;
        justify-content: center;
    }

    form {
        margin: 10px;
    }

    #tombol-tambah-pelatih {
        width: 140px;
    }

    .modal-footer {
        justify-content: space-around;
    }

    .tombol-reset {
        width: 140px;
    }

    .tombol-close {
        width: 140px;
    }
</style>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary float-left"><i class="fas fa-newspaper text-success"></i> Data Berita</h3>
            <a type="button" class="btn btn-outline-warning mb-4 float-right" href="tambah_berita.php"><i class="fas fa-plus"></i></i> Tambah Berita</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="tabel-data" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Judul</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Tag</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = mysqli_query($db, "SELECT * FROM berita");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data['judul'] ?></td>
                                <td class="text-center"><?php echo $data['kategori'] ?></td>
                                <td class="text-center"><?php echo $data['tag'] ?></td>
                                <td class="text-center"><?php echo $data['author'] ?></td>
                                <td class="text-center"><?php echo $data['tanggal'] ?></td>
                                <td class="text-center"><img width="100" src="../galeri/berita/<?php echo $data['gambar'] ?>" alt=""></td>
                                <td class="text-center">
                                    <button data-id="<?php echo $data['id_berita'] ?>" id="tombol-edit-berita" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin hapus datanya?')" href="aksi_hapus.php?id=<?php echo $data['id_berita'] ?>&hapus=data_berita"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php' ?>

