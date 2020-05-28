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
            <h3 class="text-primary float-left"><i class="far fa-images text-danger"></i> Data Galeri</h3>
            <a type="button" class="btn btn-outline-warning mb-4 float-right" data-toggle="modal" data-target="#modal-tambah-galeri"><i class="fas fa-plus"></i></i> Tambah Galeri</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="tabel-data" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Galeri</th>
                            <th class="text-center">Judul</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = mysqli_query($db, "SELECT * FROM galeri");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data['id_galeri'] ?></td>
                                <td class="text-center"><?php echo $data['judul'] ?></td>
                                <td class="text-center"><?php echo $data['deskripsi'] ?></td>
                                <td class="text-center"><img width="100" src="../galeri/<?php echo $data['gambar'] ?>" alt=""></td>
                                <td class="text-center">
                                    <button data-id="<?php echo $data['id_galeri'] ?>" id="tombol-edit-galeri" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin hapus datanya?')" href="aksi_hapus.php?id=<?php echo $data['id_galeri'] ?>&hapus=data_galeri&foto=<?php echo $data['gambar'] ?>"><i class="fa fa-trash"></i></a>
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

<script>
    $(document).ready(function() {
        $('#tabel-data').on('click', '#tombol-edit-galeri', function() {
            let id = $(this).data('id');

            $.ajax({
                url: 'get_edit_data.php?dapat=data_galeri',
                data: {'id': id},
                type: 'post',
                dataType: 'json',
                success: function(hasil) {
                    $('#modal-edit-galeri').modal('show');
                    $('.penampung-edit-galeri').html(`
           <form action="aksi_edit.php?edit=data_galeri" method="post" enctype="multipart/form-data">
           <div class="form-group">
           <label for="kode">Kode Galeri</label>
           <input readonly="" required="" type="text" id="kode" name="kode" class="form-control" value="${hasil.id_galeri}">
           </div>
           <div class="form-group">
           <label for="judul">Judul</label>
           <textarea required="" name="judul" class="form-control">${hasil.judul}</textarea>
           </div>
           <div class="form-group">
           <label for="deskripsi">Deskripsi</label>
           <textarea required="" name="deskripsi" class="form-control">${hasil.deskripsi}</textarea> 
           </div>
           <div class="form-group">
           <label for="gambar_baru">Foto</label>
           <input  type="file" id="gambar_baru" name="gambar_baru" class="form-control">
           <input  required="" type="text"  name="gambar_lama" hidden value="${hasil.gambar}">
           </div>
           <img width="100" src="../galeri/${hasil.gambar}">
           <div class="modal-footer">
           <button style="width:140px" type="submit" class="btn btn-primary" name="edit_galeri" id="tombol-edit-galeri">Edit</button>
           <button style="width:140px" type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
           <button style="width:140px" type="button" class="btn btn-secondary tombol-close" data-dismiss="modal">Close</button>
           </div>
           </form>
           `);
                }

            })
        })

    })
</script>

<!-- Modal tambah-->
<div class="modal fade" id="modal-tambah-galeri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Galeri</h5>
            </div>
            <div class="modal-body">
                <form action="aksi_insert.php?tambah=data_galeri" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="kode">Kode Galeri</label>
                        <input required="" type="text" id="kode" name="id_galeri" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input required="" type="text" id="nama" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input required="" type="text" id="nama" name="deskripsi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input required="" type="file" id="gambar" name="gambar" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="tambah_galeri" id="tombol-tambah-galeri">Tambahkan</button>
                        <button type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
                        <button type="button" class="btn btn-secondary tombol-close" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal tambah-->
<div class="modal fade" id="modal-edit-galeri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Galeri</h5>
            </div>
            <div class="penampung-edit-galeri">

            </div>
        </div>
    </div>
</div>