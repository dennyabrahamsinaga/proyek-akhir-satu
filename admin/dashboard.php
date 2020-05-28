<?php
include 'template/header.php';
include 'template/topbar.php';
?>


<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-home text-primary"></i> Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Admin Pasput</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                include 'koneksi.php';
                $data_admin = mysqli_query($db, "SELECT * FROM user");
                $jumlah_admin = mysqli_num_rows($data_admin);

                echo $jumlah_admin;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Berita</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                include 'koneksi.php';
                $data_berita = mysqli_query($db, "SELECT * FROM berita");
                $jumlah_berita = mysqli_num_rows($data_berita);

                echo $jumlah_berita;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-newspaper fa-2x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kategori</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php
                    include 'koneksi.php';
                    $data_kategori = mysqli_query($db, "SELECT * FROM kategori");
                    $jumlah_kategori = mysqli_num_rows($data_kategori);

                    echo $jumlah_kategori;
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-alt fa-2x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Tag</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                include 'koneksi.php';
                $data_tag = mysqli_query($db, "SELECT * FROM tag");
                $jumlah_tag = mysqli_num_rows($data_tag);

                echo $jumlah_tag;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-tags fa-2x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">


    <div class="col-lg-6 mb-4">

      <!-- Approach -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">#Selayang Pandang</h6>
        </div>
        <div class="card-body">
          <p class="text-justify text-dark">Pantai Pasir Putih Parparean berada di Desa Parparean II (dua). Desa ini terletak di Kecamatan Porsea, Kabupaten Toba, Sumatera Utara.
            Awalnya, pantai ini ditutupi oleh semak-belukar dengan kondisi pantai yang jorok dan berlumpur serta rumah-rumah penduduk.
            Dengan kondisi pantai tersebut dan belum dieksplorasi lebih dalam lagi membuat objek wisata ini tidak dikenal oleh wisatawan.
          </p>
          <p class="mb-0 text-justify text-dark">
            Namun, pada tahun 2007 warga sekitar yang bertempat tinggal di sekitar lokasi pantai tersebut mulai mengembangkan potensi dari Pantai Pasir Putih Parparean
            dengan melakukan kegiatan pembersihan area pantai serta pembangunan usaha wisata di lokasi pantai. Dengan adanya usaha pengembangan objek wisata dari masyarakat lokal
            secara terus menerus sehingga membuat pantai ini dilirik oleh Pemkab Tobasa dan sejak saat itulah objek wisata ini mulai dikenal oleh wisatawan lokal dan non-lokal.
          </p>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include 'template/footer.php';
?>