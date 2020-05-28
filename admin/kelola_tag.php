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
      <h3 class="text-primary float-left"><i class="fas fa-tags text-warning"></i> Data Tag</h3>
      <a type="button" class="btn btn-outline-warning mb-4 float-right" data-toggle="modal" data-target="#modal-tambah-tag"><i class="fas fa-plus"></i></i> Tambah Tag</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped" id="tabel-data" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Kode Tag</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($db, "SELECT * FROM tag");
            while ($data = mysqli_fetch_array($query)) {
             ?>
             <tr>
               <td class="text-center"><?php echo $no++ ?></td>
               <td class="text-center"><?php echo $data['id_tag'] ?></td>
               <td class="text-center"><?php echo $data['nama'] ?></td>
               <td class="text-center">
                <button data-id="<?php echo $data['id_tag'] ?>" id="tombol-edit-tag" class="btn btn-success"><i class="fa fa-edit"></i></button>
                <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin hapus datanya?')" href="aksi_hapus.php?id=<?php echo $data['id_tag'] ?>&hapus=data_tag"><i class="fa fa-trash"></i></a>
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
    $('#tabel-data').on('click','#tombol-edit-tag', function(){
      let id = $(this).data('id');
      
      $.ajax({
        url : 'get_edit_data.php?dapat=data_tag',
        data : {'id': id},
        type : 'post',
        dataType : 'json',
        success: function(hasil){
          $('#modal-edit-tag').modal('show');
          $('.penampung-edit-tag').html(`
            <form action="aksi_edit.php?edit=data_tag" method="post">
            <div class="form-group">
            <label for="kode">Kode Tag</label>
            <input readonly="" required="" type="text" id="kode" name="kode" class="form-control" value="${hasil.id_tag}">
            </div>
            <div class="form-group">
            <label for="nama">Nama Tag</label>
            <input required="" type="text" id="nama" name="nama" class="form-control" value="${hasil.nama}">
            </div>
            <div class="modal-footer">
            <button style="width:140px" type="submit" class="btn btn-primary" name="edit_tag">Edit</button>
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
<div class="modal fade" id="modal-tambah-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tag</h5>
   </div>
   <div class="modal-body">
     <form action="aksi_insert.php?tambah=data_tag" method="post">
      <div class="form-group">
        <label for="kode">Kode Tag</label>
        <input required="" type="text" id="kode" name="id_tag" class="form-control">
      </div>
      <div class="form-group">
        <label for="nama">Nama Tag</label>
        <input required="" type="text" id="nama" name="nama" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="tambah_tag" id="tombol-tambah-tag">Tambahkan</button>
        <button type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
        <button type="button" class="btn btn-secondary tombol-close" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>



<!-- Modal tambah-->
<div class="modal fade" id="modal-edit-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Data Tag</h5>
    </div>
    <div class="penampung-edit-tag">

    </div>
  </div>
</div>
</div>

