<?php
    function get_title($_title){
        return $_title;
    }
    
    function get_css($css){
        return $css;
    }
    
    function open_page($_title, $css){
      echo('<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>' . 
          get_title($_title).
              '</title>
          <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="fontawesome/css/all.min.css">    
          <link rel="stylesheet" type="text/css"  href="bootstrap/css/' . get_css($css) . '.css">
          <script src="jquery-3.4.1.min.js"></script>
      </head>

      <body>');
    }
    
    function navigasi(){
        echo('
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <div class="container">

              <!-- Navbar brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo/logo-index.png" width="70" alt="">
                    Pasir Putih Parparean
                </a>


                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav ml-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fasilitas.php">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="peta.php">Peta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About</a>
                        </li>
                    </ul>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>'
        );
    }

    function hubungi_kami(){
        echo('
        <header class="text-center py-1 mb-4">
        </header>

        <div class="container">
          <div class="row">

            <!-- Team Member 1 -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-0 shadow">
                <img src="img/about/denny.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mb-1">Denny Abraham Sinaga</h5>
                  <div class="card-text text-black-50">11419036 &mdash; Mahasiswa aktif di Institut Teknologi Del, program studi
                                    Sarjana Terapan Rekayasa Perangkat Lunak.</div>
                </div>
              </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-0 shadow">
                <img src="img/about/anjelina.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mb-1">Anjelina Sihombing</h5>
                  <div class="card-text text-black-50">11419063 &mdash; Mahasiswa aktif di Institut Teknologi Del, program studi
                                    Sarjana Terapan Rekayasa Perangkat Lunak</div>
                </div>
              </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-0 shadow">
                <img src="img/about/berliana.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mb-1">Berliana Laurenza Simamora</h5>
                  <div class="card-text text-black-50">11419016 &mdash; Mahasiswa aktif di Institut Teknologi Del, program studi
                                    Sarjana Terapan Rekayasa Perangkat Lunak</div>
                </div>
              </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-xl-4 col-md-6 mx-auto">
              <div class="card border-0 shadow">
                <img src="img/about/timothy.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mb-1">Timothy J.F Henan</h5>
                  <div class="card-text text-black-50">11419028 &mdash; Mahasiswa aktif di Institut Teknologi Del, program studi
                                    Sarjana Terapan Rekayasa Perangkat Lunak</div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mx-auto">
              <div class="card border-0 shadow">
                <img src="img/about/yonathan.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mb-1">Yonathan Y.P Lumban Tobing</h5>
                  <div class="card-text text-black-50">11419038 &mdash; Mahasiswa aktif di Institut Teknologi Del, program studi
                                    Sarjana Terapan Rekayasa Perangkat Lunak</div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
            
        </div>');
    }

    function close_page(){
    echo('
    <script src="bootstrap/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>');
}
?>