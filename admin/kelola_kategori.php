<?php
include "koneksi.php";
include 'template/header.php';
include 'template/topbar.php';
?>

<style>
    table .aksi{
      display: flex;
      justify-content: center;
    }
    form{
      margin: 10px;
    }
    #tombol-tambah-pelatih{
      width: 140px;
    }
    .modal-footer{
      justify-content: space-around;
    }
    .tombol-reset{
      width: 140px;
    }
    .tombol-close{
      width: 140px;
    }
  </style>


  <div class="container-fluid">
    <div class="card">
     <div class="card-header">
      <h3 class="text-primary float-left"><i class="fas fa-file-alt text-info"></i> Data Kategori</h3>
      <a type="button" class="btn btn-outline-warning mb-4 float-right" data-toggle="modal" data-target="#modal-tambah-kategori"><i class="fas fa-plus"></i></i> Tambah Kategori</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped" id="tabel-data" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Kode Kategori</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($db, "SELECT * FROM kategori");
            while ($data = mysqli_fetch_array($query)) {
             ?>
             <tr>
               <td class="text-center"><?php echo $no++ ?></td>
               <td class="text-center"><?php echo $data['id_kategori'] ?></td>
               <td class="text-center"><?php echo $data['nama'] ?></td>
               <td class="text-center">
                <button data-id="<?php echo $data['id_kategori'] ?>" id="tombol-edit-kategori" class="btn btn-success"><i class="fa fa-edit"></i></button>
                <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin hapus datanya?')" href="aksi_hapus.php?id=<?php echo $data['id_kategori'] ?>&hapus=data_kategori"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>


<?php include'template/footer.php' ?>

<script>
  $(document).ready(function(){
    $('#tabel-data').on('click','#tombol-edit-kategori', function(){
      let id = $(this).data('id');
      
      $.ajax({
        url : 'get_edit_data.php?dapat=data_kategori',
        data : {'id': id},
        type : 'post',
        dataType : 'json',
        success: function(hasil){
          $('#modal-edit-kategori').modal('show');
          $('.penampung-edit-kategori').html(`
            <form action="aksi_edit.php?edit=data_kategori" method="post">
            <div class="form-group">
            <label for="kode">Kode Kategori</label>
            <input readonly="" required="" type="text" id="kode" name="kode" class="form-control" value="${hasil.id_kategori}">
            </div>
            <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input required="" type="text" id="nama" name="nama" class="form-control" value="${hasil.nama}">
            </div>
            <div class="modal-footer">
            <button style="width:140px" type="submit" class="btn btn-primary" name="edit_kategori">Edit</button>
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
<div class="modal fade" id="modal-tambah-kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
   </div>
   <div class="modal-body">
     <form action="aksi_insert.php?tambah=data_kategori" method="post">
      <div class="form-group">
        <label for="kode">Kode Kategori</label>
        <input required="" type="text" id="kode" name="id_kategori" class="form-control">
      </div>
      <div class="form-group">
        <label for="nama">Nama Kategori</label>
        <input required="" type="text" id="nama" name="nama" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="tambah_kategori" id="tombol-tambah-kategori">Tambahkan</button>
        <button type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
        <button type="button" class="btn btn-secondary tombol-close" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>



<!-- Modal tambah-->
<div class="modal fade" id="modal-edit-kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
    </div>
    <div class="penampung-edit-kategori">

    </div>
  </div>
</div>
</div>